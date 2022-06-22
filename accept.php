<?php
    include('functions.php');
    $id = $_GET['id'];
    $query = "select * from `requests` where `id` = '$id'; ";
    if(count(fetchAll($query)) > 0){
        foreach(fetchAll($query) as $row){
            $flat = $row['flat'];
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            
            $contact = $row['contact_num'];
            $email = $row['email'];
            $password = $row['password'];
        
            $query = "INSERT INTO `accounts` ( `flat`,`id`, `firstname`, `lastname`,`contact_num`,`email`, `type`, `password`) VALUES ( '$flat', NULL, '$firstname', '$lastname', '$contact','$email', 'user', '$password');";
        }
        $query .= "DELETE FROM `requests` WHERE `requests`.`id` = '$id';";
        if(performQuery($query)){
            echo ("<script LANGUAGE='JavaScript'>
    window.alert('Request Accepted');
    window.location.href='http://localhost/ns/society/adminpanel.php';
    </script>");
            
        }else{
            echo "<script>alert('Unknown error occured. Please try again.')</script>";
        }
    }else{
        echo "<script>alert('Error occured.')</script>";
    }
    
?>
<br/><br/>