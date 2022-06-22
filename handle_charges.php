<?php
include 'database.php';
session_start();
$charges="false";
// If form submitted, insert values into the database.
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        // removes backslashes

$flat = $_GET['flatno'];
        //escapes special characters in a string
$flat = mysqli_real_escape_string($conn,$flat); 

$water= stripslashes($_REQUEST['water_charges']);
$water = mysqli_real_escape_string($conn,$water);

 
 $maintenance = stripslashes($_REQUEST['maintain_charges']);
 $maintenance = mysqli_real_escape_string($conn,$maintenance);

 $extra= stripslashes($_REQUEST['extra_charges']);
 $extra= mysqli_real_escape_string($conn,$extra);

 $txt= stripslashes($_REQUEST['reason']);
 $txt= mysqli_real_escape_string($conn,$txt);


 
$query2 = "INSERT INTO `bills`(`flat`, `water_charge`, `maintanance_charge`, `extra_charges`, `details`) VALUES ('$flat','$water','$maintenance','$extra','$txt')";
$result1 = mysqli_query($conn,$query2);

        if($result1){
            $charges = "Charges Added Successfully";
            header('Location: Memberdetail.php?flatno='.$flat.'&charges='.$charges);
   }
    }
?>