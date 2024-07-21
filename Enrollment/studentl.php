<?php

$connection=mysqli_connect("localhost","root","","enrollment");

if(!$connection)
{
    die("Connection Error".mysqli_connect_error());
}
else
{
    $message = "Connected";
    echo "<script>alert('$message');</script>";
}

if(isset ($_POST['submit']))    
{
    $name = $_POST["name"];
    $nic = $_POST["nic"];

    // Check if name and NIC exist in the database
    $query = "SELECT * FROM student_add WHERE Name='$name' AND nic='$nic'";
    $result = mysqli_query($connection, $query);

    if(mysqli_num_rows($result) == 1) {
        // Student found, redirect to dashboard or desired page
        header("Location: Student.html");
        exit();
    } else {
        // Student not found or credentials are incorrect
        $message = "Invalid credentials";
        echo "<script>alert('$message');</script>";
    }
}

?>
