<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
include 'database.php';

$email = $_POST['email'];
$password = $_POST['password'];
$query = "SELECT * FROM `accounts` WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($conn,$query);
$numrows=mysqli_num_rows($result);
if($numrows == 1){
    $row = mysqli_fetch_assoc($result);
    session_start();
    $_SESSION['login']=true;
    // $_SESSION['type'] = $row['type'];
    $_SESSION['email'] = $email;
    $_SESSION['flat'] = $row['flat'];
    header("Location:memberdash.php");

}
else{
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Enter Valid Credentials, Thank You !!!');
    window.location.href='http://localhost/ns/society/memberloginn.php';
    </script>");  
}


}
?>