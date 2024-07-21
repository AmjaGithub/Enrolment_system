<?php

$connection = mysqli_connect("localhost", "root", "", "enrollment");

if (!$connection) {
    die("Connection Error: " . mysqli_connect_error());
} else {
    $message = "Connected";
    // echo "<script>alert('$message');</script>";
}

if (isset($_POST['submit'])) {
    $FNAME = mysqli_real_escape_string($connection, $_POST["fname"]);
    $NAME = mysqli_real_escape_string($connection, $_POST["name"]);
    $PHONE = mysqli_real_escape_string($connection, $_POST["contact_no"]);
    $EMAIL = mysqli_real_escape_string($connection, $_POST["mail"]);
    $GENDER = mysqli_real_escape_string($connection, $_POST["Genter"]);
    $NIC = mysqli_real_escape_string($connection, $_POST["nic"]);
    $S_ID = mysqli_real_escape_string($connection, $_POST["student_id"]);
    $DEPARTMENT = mysqli_real_escape_string($connection, $_POST["dep"]);
    $FEE = mysqli_real_escape_string($connection, $_POST["fee"]);
    $REPET = mysqli_real_escape_string($connection, $_POST["repet"]);
    $ATTEMPT = mysqli_real_escape_string($connection, $_POST["attempt"]);
    $SUBJECT = mysqli_real_escape_string($connection, $_POST["Sname"]);
    $PICTURE = mysqli_real_escape_string($connection, $_POST["picture"]);

    //echo "$FNAME, $NAME, $PHONE, $EMAIL, $GENDER, $NIC, $S_ID, $DEPARTMENT, $FEE, $REPET, $ATTEMPT, $SUBJECT, $PICTURE";

    $query = "INSERT INTO `receipts` (fname, name, contact_no, email, gender, nic, student_id, department, fee_receipt, semester, attempt, subjects, picture) VALUES ('$FNAME', '$NAME', '$PHONE', '$EMAIL', '$GENDER', '$NIC', '$S_ID', '$DEPARTMENT', '$FEE', '$REPET', '$ATTEMPT', '$SUBJECT', '$PICTURE')";

    if (mysqli_query($connection, $query)) {
        echo '<script>alert("Successfully inserted");</script>';
        // header('Location: Exam.php');
    } else {
        echo "SQL Error: " . mysqli_error($connection);
    }
} else {
    echo "Form not submitted correctly";
}

mysqli_close($connection);
?>
