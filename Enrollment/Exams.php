<?php

$connection = mysqli_connect("localhost", "root", "", "enrollment");

if (!$connection) {
    die("Connection Error" . mysqli_connect_error());
} else {
    $message = "Connected";
    echo "<script>alert('$message');</script>";
}

if (isset($_POST['submit'])) {

    $fname = $_POST["fname"];
    $name = $_POST["name"];
    $contact_no = $_POST["contact_no"];
    $email = $_POST["mail"];
    $gender = $_POST["Genter"]; // corrected variable name from $genter to $gender
    $nic = $_POST["nic"];
    $student_id = $_POST["student_id"];
    $department = $_POST["dep"];
    $semester = $_POST["sem"];
    $subject = $_POST["Sname"];

    $query = "INSERT INTO exam (Name, name_wi, Phone_Num, emill, Genter, nic, student_id, Department, semester, subject) VALUES ('$fname', '$name', '$contact_no', '$email', '$gender', '$nic', '$student_id', '$department', '$semester', '$subject')";

    if (mysqli_query($connection, $query)) {
        $message = "Data Added";
        echo "<script>alert('$message');</script>";
        header("location:Student.html");
    } else {
        $message = "Data Not Added";
        echo "<script>alert('$message');</script>";
    }
}

?>
