<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Include html2pdf.js from CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
</head>
<body class="p-10 text-gray-800">

<section class="bg-purple-100 rounded-2xl p-5">
    <div class="container mx-auto">
        <div class="flex">
            <a href="new.html" class="text-2xl font-bold pr-5 border-r border-purple-300 mr-5 ">Enrollment</a>
            <div class="my-auto">
                <u class="flex border font-bold text-gray-600 list-none decoration-0">
                <u class="flex border font-bold text-gray-600 list-none decoration-0" >
                <li class="pr-5"><a href="index.html"  class="px-3 py-2 border border-purple-100 hover:border-purple-300 rounded ">Home</a></li>
                <li class="pr-5"><a href="Studenadd.php"  class="px-3 py-2 border border-purple-100 hover:border-purple-300 rounded ">Student Registation</a></li>
                <li class="pr-5"><a href="lactureadd.php" class="px-3 py-2 border border-purple-100 hover:border-purple-300 rounded ">Staff Registation</a></li>
                <li class="pr-5"><a href="LR_view.php" class="px-3 py-2 border border-purple-100 hover:border-purple-300 rounded ">View Staff </a></li>
                <li class="pr-5"><a href="examsview.php" class="px-3 py-2 border border-purple-100 hover:border-purple-300 rounded ">Exam Applications</a></li>
                
               
                
              </u>
                </u>
            </div>
        </div>
    </div>
</section>
        
<section class="bg-sky-100 rounded-2xl p-10 mt-5">
    <div class="flex items-center justify-between">
        <input class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button" name="submit" id="print-btn" value="Print">
    </div>

    <h1 class="text-xl mb-2">Your Student</h1>

    <table id="student-table" class="w-full">
        <thead class="bg-gray-50 border-b-2 border-gray-200">
            <tr class="bg-fuchsia-300">
                <th scope="col" class="w-20 p-3 text-sm font-semibold tracking-wide text-left">Student ID</th>
                <th scope="col" class="w-20 p-3 text-sm font-semibold tracking-wide text-left">Name</th>
                <th scope="col" class="w-20 p-3 text-sm font-semibold tracking-wide text-left">Nic</th>
                <th scope="col" class="w-20 p-3 text-sm font-semibold tracking-wide text-left">Year</th>
                <th scope="col" class="w-20 p-3 text-sm font-semibold tracking-wide text-left">Address</th>
                <th scope="col" class="w-20 p-3 text-sm font-semibold tracking-wide text-left">Email ID</th>
                <th scope="col" class="w-20 p-3 text-sm font-semibold tracking-wide text-left">Contect No</th>
                <th scope="col" class="w-20 p-3 text-sm font-semibold tracking-wide text-left">Department</th>
                <th scope="col" class="w-20 p-3 text-sm font-semibold tracking-wide text-left">Edit</th>
                <th scope="col" class="w-20 p-3 text-sm font-semibold tracking-wide text-left">Delete</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            <?php
            $connection = mysqli_connect("localhost", "root", "", "enrollment");

            if (!$connection) {
                die("Connection Error" . mysqli_connect_error());
            }

            $get = "SELECT * FROM student_add";
            $result = mysqli_query($connection, $get);
            $connection_check = mysqli_num_rows($result);

            if ($connection_check > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr class='bg-white'>";
                    echo "<td class='p-3 text-sm text-gray-700 whitespace-nowrap'>{$row['student_id']}</td>";
                    echo "<td class='p-3 text-sm text-gray-700'>{$row['Name']}</td>";
                    echo "<td class='p-3 text-sm text-gray-700'>{$row['nic']}</td>";
                    echo "<td class='p-3 text-sm text-gray-700'>{$row['Year']}</td>";
                    echo "<td class='p-3 text-sm text-gray-700'>{$row['Address']}</td>";
                    echo "<td class='p-3 text-sm text-gray-700'>{$row['Email_Id']}</td>";
                    echo "<td class='p-3 text-sm text-gray-700'>{$row['Contect_No']}</td>";
                    echo "<td class='p-3 text-sm text-gray-700'>{$row['Department']}</td>";
                    echo "<td class='p-3 text-sm text-gray-700'><a href='Edit.php?edit={$row['student_id']}' class='text-medium bg-purple-500 text-white px-5 py-1 rounded font-bold ml-auto'>Edit</a></td>";
                    echo "<td class='p-3 text-sm text-gray-700'><a href='delete.php?del={$row['student_id']}' class='text-medium bg-red-500 text-white px-2 py-1 rounded font-bold ml-auto'>Delete</a></td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>
</section>

<script>
document.getElementById('print-btn').addEventListener('click', function () {
    var element = document.querySelector('section.bg-sky-100'); // Target the section you want to convert to PDF
    var opt = {
        margin:       0.5,
        filename:     'students.pdf',
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { scale: 2 },
        jsPDF:        { unit: 'in', format: 'letter', orientation: 'landscape' }
    };
    html2pdf().set(opt).from(element).save();
});
</script>

</body>
</html>