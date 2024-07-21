<?php

$connection=mysqli_connect("localhost","root","","enrollment");

if(!$connection)
{
    die("Connection Error".mysqli_connect_error());
}
else
{
    echo"Connected";
}

if(isset ($_POST['submit']))    

{

    $staff_id=$_POST["staff_id"];
    $Name=$_POST["name"];
    $Nic=$_POST["Nic"];
    $address=$_POST["address"];
    $email=$_POST["mail"];
    $contect_no=$_POST["contact_no"];
    $course=$_POST["depa"];
    $duration=$_POST["time"];
    $genter=$_POST["Genter"];

    
    //Staff_id	Name	Nic	Address	Email_id	Contact_no	Course	Duration
    $quiry="INSERT INTO lacture (Staff_id,Name,Nic,Address,Email_id,Contact_no,Course,Duration,Gender ) VALUE('$staff_id','$Name','$Nic','$address','$email','$contect_no','$course','$duration','$genter')";

    
    $link=mysqli_query($connection,$quiry);
    if($link)
    {
        echo"Data Add";
        header("location: lactureadd.php");
    }

    else
    {
        echo"Data Not Added";
    }


}




?>