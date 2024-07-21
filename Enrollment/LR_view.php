<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    
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
                <li class="pr-5"><a href="view.php" class="px-3 py-2 border border-purple-100 hover:border-purple-300 rounded ">View Student </a></li>
                <li class="pr-5"><a href="lactureadd.php" class="px-3 py-2 border border-purple-100 hover:border-purple-300 rounded ">Staff Registation</a></li>
                <li class="pr-5"><a href="examsview.php" class="px-3 py-2 border border-purple-100 hover:border-purple-300 rounded ">Exam Applications</a></li>
                
               
                
              </u>
                        
                    </u>
                </div>
                
            </div>
        </div>

    </section>
        
    <section class="bg-sky-100 rounded-2xl p-10 mt-5 ">
    <div class="flex items-center justify-between">
        <input class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button" name="submit" id="print-btn" value="Print">
    </div>
        
        

        <!--<div class="p-5 h-screen bg-gray-100"> -->
            <h1 class="text-xl mb-2">Your Staff</h1>
            
        
   <!--<div class="overflow-auto rounded-lg">-->
            
            <table id="student-table" class="w-full">
                <thead class="bg-gray-50 border-b-2 border-gray-200 ">
                    <tr class="bg-fuchsia-300">
                        <th scope="col" class=" w-20 p-3 text-sm font-semibold tracking-wide text-left">Staff ID</th>
                        <th scope="col" class=" w-20 p-3 text-sm font-semibold tracking-wide text-left">Name</th>
                        <th scope="col"class="w-20 p-3 text-sm font-semibold tracking-wide text-left">Nic</th>
                        <th scope="col"class="w-20 p-3 text-sm font-semibold tracking-wide text-left">Address</th>
                        <th scope="col"class="w-20 p-3 text-sm font-semibold tracking-wide text-left">Email ID</th>
                        <th scope="col"class="w-20 p-3 text-sm font-semibold tracking-wide text-left">Contect No</th>
                        <th scope="col"class="w-20 p-3 text-sm font-semibold tracking-wide text-left">Department</th>
                        <th scope="col"class="w-20 p-3 text-sm font-semibold tracking-wide text-left">Time</th>
                        <th scope="col"class="w-20 p-3 text-sm font-semibold tracking-wide text-left">Gender</th>
                        <th scope="col"class="w-20 p-3 text-sm font-semibold tracking-wide text-left">Delete</th>
                        <th scope="col"class="w-20 p-3 text-sm font-semibold tracking-wide text-left">Edit</th>
</tr>
</thead>

<tbody class="divide-y divide-gray-100">
<?php

$connection=mysqli_connect("localhost","root","","enrollment");

if(!$connection)
{
    die("Connection Error".mysqli_connect_error());
}
else
{
    
}

$get="SELECT * FROM lacture";

$result=mysqli_query($connection,$get);

$connection_check=mysqli_num_rows($result);


if($connection_check>0)
{
  
//   Staff_id
// Name
// Nic
// Address
// Email_id
// Contact_no
// Course
// Duration
// Gender

    while($row=mysqli_fetch_assoc($result))

    {
        
        

        echo"<tr class='bg-white'>";
        echo"<td class='p-3 text-sm text-gray-700 whitespace-nowrap'>";
        echo $row['Staff_id'];
        echo "</td>";
        echo"<br>";
        
        
        echo"<td class='p-3 text-sm text-gray-700'>";
        echo $row['Name'];
        echo "</td>";

        
        echo "<td class='p-3 text-sm text-gray-700'>";
        echo $row['Nic'];
        echo "</td>";

        
        echo"<td class='p-3 text-sm text-gray-700'>";
        echo $row['Address'];
        echo "</td>";

        
        echo"<td class='p-3 text-sm text-gray-700'>";
        echo $row['Email_id'];
        echo "</td>";

        
        echo"<td class='p-3 text-sm text-gray-700'>";
        echo $row['Contact_no'];
        echo "</td>";

       
        echo"<td class='p-3 text-sm text-gray-700'>";
        echo $row['Course'];
        echo "</td>";

       
        echo"<td class='p-3 text-sm text-gray-700'>";
        echo $row['Duration'];
        echo "</td>";

        echo"<td class='p-3 text-sm text-gray-700'>";
        echo $row['Gender'];
        echo "</td>";





        echo "<td class='p-3 text-sm text-gray-700'>";
        echo "<a href='editlac.php?edit=" . $row['Staff_id'] . "' class='text-medium bg-purple-500 text-white px-5 py-1 rounded font-bold ml-auto'>Edit</a>";
        echo "</td>";


        
       
        echo"<td class='p-3 text-sm text-gray-700'>";
        echo"<a href='lrdelete.php?del={$row['Staff_id']}' class='text-medium bg-red-500 text-white px-2 py-1 rounded font-bold ml-auto'> Delete</a>";
        echo"</td>";



        echo "</tr>";
       

    }
}


?>

</tbody>

</table>
</div>



</section >

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
