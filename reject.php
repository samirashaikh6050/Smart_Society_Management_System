<?php
    include('functions.php');
    $id = $_GET['id'];
    
    $query = "DELETE FROM `requests` WHERE `requests`.`id` = '$id';";
        if(performQuery($query)){
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('Request Rejected');
            window.location.href='http://localhost/ns/society/adminpanel.php';
            </script>");
        }else{
            echo ("<script LANGUAGE='JavaScript'>
    window.alert('Unknown Error Occurred');
    window.location.href='http://localhost/ns/society/adminpanel.php';
    </script>");
        }

?>