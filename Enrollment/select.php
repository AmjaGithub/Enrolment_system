<?php
//  echo "<script src="assert/js/sweetalert.js"></script>;
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

    $student_id=$_POST["student_id"];
    $name=$_POST["name"];
    $Nic=$_POST["pas"];
    $year=$_POST["Year"];
    $address=$_POST["address"];
    $email=$_POST["mail"];
    $contect_no=$_POST["contact_no"];
    $department=$_POST["dep"];
    $genter=$_POST["Genter"];

    //INSERT INTO `student_add`(`student_id`, `Name`, `nic`, `Year`, `Address`, `Email _Id`, `Contect_No`, `Department`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')

    $quiry="INSERT INTO student_add (student_id ,Name,nic,Year,	Address,Email_Id,Contect_No,Department,Gender ) VALUE('$student_id','$name','$Nic','$year','$address','$email','$contect_no','$department','$genter')";

    
    $link=mysqli_query($connection,$quiry);
    if($link)
    { 
        $message = "Data Add";
        echo "<script>alert('$message');</script>";
        header("location: Studenadd.php");
        // Swal.fire({
        //     position: "top-end",
        //     icon: "success",
        //     title: "Your work has been saved",
        //     showConfirmButton: false,
        //     timer: 1500
        //   });
    }

    else
    { $message = "Data Not Added";
        echo "<script>alert('$message');</script>";
    }


}




?>