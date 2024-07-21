<?php

// Establish a connection to the database
$connection = mysqli_connect("localhost", "root", "", "enrollment");

// Check if the connection was successful
if (!$connection) {
    die("Connection Error: " . mysqli_connect_error());
} else {
    // Alert message for successful connection
    $message = "Connected";
    echo "<script>alert('$message');</script>";
}

// Check if the 'del' parameter is set in the URL
if(isset($_GET['del'])) {
    // Sanitize the 'del' parameter to prevent SQL injection
    $delete = mysqli_real_escape_string($connection, $_GET['del']);

    // Construct the SQL query to delete the record
    $sql = "DELETE FROM lacture WHERE Staff_id='$delete'";

    // Execute the delete query
    if(mysqli_query($connection, $sql)) {
        // Redirect to the view.php page after successful deletion
        echo '<script>location.replace("LR_view.php");</script>';
    } else {
        // Output error message if the deletion query fails
        echo "Error:". mysqli_error($connection);
    }
} else {
    // Output error message if the 'del' parameter is not set
    echo "Error: 'del' parameter is missing.";
}

// Close the database connection
mysqli_close($connection);

?>
