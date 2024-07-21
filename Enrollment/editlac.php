<?php

$connection = mysqli_connect("localhost", "root", "", "enrollment");

if (!$connection) {
    die("Connection Error" . mysqli_connect_error());
} else {
    $message = "Connected";
    echo "<script>alert('$message');</script>";
}

$edit = $_GET['edit'];

$sql = "SELECT * FROM lacture WHERE Staff_id ='$edit'";
$run = mysqli_query($connection, $sql);

while ($row = mysqli_fetch_array($run)) {
    

    $staff_id = $row["Staff_id"];
    $Name = $row["Name"];
    $Nic = $row["Nic"];
    $address = $row["Address"];
    $email = $row["Email_id"];
    $contect_no = $row["Contact_no"];
    $course = $row["Course"];
    $duration= $row["Duration"];
    $genter=$row["Gender"];
}


// Check form submission
if (isset($_POST['submit'])) {

    $staff_id=$_POST["staff_id"];
    $Name=$_POST["name"];
    $Nic=$_POST["Nic"];
    $address=$_POST["address"];
    $email=$_POST["mail"];
    $contect_no=$_POST["contact_no"];
    $course=$_POST["depa"];
    $duration=$_POST["time"];
    $genter=$_POST["Genter"];

    // Update query
    // Update query
$query = "UPDATE lacture SET Name='$Name', Nic='$Nic',Address='$address', 
Email_id='$email',Contact_no='$contect_no', Course='$course',Duration='$duration', Gender='$genter' 
 WHERE Staff_id='$edit'";


    // Execute query
    $result = mysqli_query($connection, $query);
    if ($result) {
        $message = "Data updated successfully";
        echo "<script>alert('$message');</script>";
        header("location: LR_view.php");
    } else {
        $message = "Data update failed";
        echo "<script>alert('$message');</script>";
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="p-10 text-gray-800">

<!-- <section class="bg-purple-100 rounded-2xl p-5">
    <div class="container mx-auto">
        <div class="flex">
            <a href="new.html" class="text-2xl font-bold pr-5 border-r border-purple-300 mr-5 ">Enrollment</a>
            <div class="my-auto">
                <u class="flex border font-bold text-gray-600 list-none decoration-0">
                    <li class="pr-5"><a href="index.html" class="px-3 py-2 border border-purple-100 hover:border-purple-300 rounded ">Home</a></li>
                    <li class="pr-5"><a href="Adminlogin.html" class="px-3 py-2 border border-purple-100 hover:border-purple-300 rounded ">Admin</a></li>
                    <li class="pr-5"><a href="studentLogin.html" class="px-3 py-2 border border-purple-100 hover:border-purple-300 rounded ">Student</a></li>
                    <li class="pr-5"><a href="#" class="px-3 py-2 border border-purple-100 hover:border-purple-300 rounded ">About</a></li>


                </u>
            </div>
            <a href="Studenadd.php" class="text-medium bg-red-500 text-white px-3 py-2 rounded font-bold ml-auto">Register</a>
        </div>
    </div>

</section> -->

<section class="bg-sky-100 rounded-2xl p-10 mt-5 ">

<div class="max-w-md mx-auto bg-white p-8 rounded shadow-md mt-5">
    <h1 class="font-serif font-bold text-center ">Staff Register</h1>

        <form action="" method="">

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name"> Staff ID: </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  type="text" name="staff_id"  value="<?php echo $staff_id ?>" required>
                </div>

            <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="name"> Name: </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  type="text" name="name"  value="<?php echo $Name ?>"  required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="pass"> Nic: </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"  type="password" name="Nic"  value="<?php echo $Nic ?>" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name"> Address: </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  type="text" name="address" value="<?php echo $address ?>" required>
                </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="mail"> Email ID: </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"  type="email" name="mail" value="<?php echo $email ?>" required>
            </div>


            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name"> Contact No: </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  type="text" name="contact_no"  value="<?php echo $contect_no ?>"required>
                </div>

                
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="dep"> Department: </label>
                <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-3 py-2 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="depa"  value="<?php echo $course ?>" required>
                    <option value="">Select</option>
                    <option value="HNDIT" <?php if ($course == "HNDIT") echo "selected"; ?>> HNDIT</option>
                    <option value="HNDE" <?php if ($course == "HNDE") echo "selected"; ?>>HNDE</option>
                    <option value="HNDA" <?php if ($course == "HNDA") echo "selected"; ?> >HNDA</option>
                </select>

            </div>

                 
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="dep"> Department: </label>
                <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-3 py-2 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="time"  value="<?php echo $duration ?>" required>
                    <option value="">Select</option>
                    <option value="full_time" <?php if ($duration == "full_time") echo "selected"; ?>>Full Time</option>
                    <option value="Part_time" <?php if ($duration == "full_time") echo "selected"; ?>>Part Time</option>
                </select>

            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="dep"> Gender: </label>
                <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-3 py-2 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="Genter"  value="<?php echo $genter ?>" required>
                    <option value="">Select</option>
                    <option value="male"<?php if ( $genter == "male") echo "selected"; ?>>Male</option>
                    <option value="female" <?php if ( $genter == "full_time") echo "selected"; ?>>Female</option>
                </select>

            </div>


            <div class="flex items-center justify-between">
                <input class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" name="submit" value="Edit">

            </div>

        </form>
    </div>


</section> 




</body>
</html>