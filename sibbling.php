<?php
session_start();

include 'database.php';
?>



<!DOCTYPE html>
<html>

<head>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/sibblingcss.css">

</head>
<title>Sibbling Details</title>
<style>
    body {
        background: url(attachments/background.jpg);
        background-size: cover;
    }


    .nav-item ul li a {

        color: #fff;

        background-color: black;

    }

    .hover-effect:hover {
        background-color: grey;
        border: 2px black;
        color: white;

    }
    .footer{
		    position: fixed;
    height: auto;
    left: 0;
    top: 47em;
    width: 100%;
    background-color: black;
    color: white;
    padding-left: 20px;
    padding-top: 20px;
		}
		.footer p{
	text-align:right;
	bottom:160%;
	right:5%;
	position:relative;
	padding-top:0px;
    margin-top: -70px;
    

}
</style>

<body>
    <?php include 'navbar_member.php' ?>

    <?php
    $conn = mysqli_connect('localhost:3345', 'root', '', 'pendingrequestsystem');


    // If form submitted, insert values into the database.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_SESSION['login']) && $_SESSION['login']==true ){
            //echo $_SESSION['email'];
            $flat= $_SESSION['flat']; }

        $f_name = stripslashes($_POST['first']);
        $f_name = mysqli_real_escape_string($conn, $f_name);

        $l_name = stripslashes($_POST['last']);
        $l_name = mysqli_real_escape_string($conn, $l_name);

        $age = stripslashes($_POST['age']);
        $age = mysqli_real_escape_string($conn, $age);

        $relation = stripslashes($_POST['relation']);
        $relation = mysqli_real_escape_string($conn, $relation);


        $mobile_no = stripslashes($_POST['mobile_no']);
        $mobile_no = mysqli_real_escape_string($conn, $mobile_no);

        $query2 = "INSERT INTO `tbl_family`(`flat`, `first`, `last`, `age`, `relation`, `mobile_no`) VALUES ('$flat','$f_name','$l_name','$age','$relation','$mobile_no')";
        $result1 = mysqli_query($conn, $query2);

        if ($result1) {
            echo ("<script LANGUAGE='JavaScript'>
          window.alert('Details Added Succesfully');
          window.location.href='http://localhost/ns/society/sibbling.php';
          </script>");
        }
    }
    ?>
   

    <!-- New Code -->
        <div class="login-page">
            <div class="form">
                <form id="registration" action="sibbling.php" method="post">
                    <h2> Add Family Members </h2>
                    <br/>
                    <?php 
     
     if(isset($_SESSION['login']) && $_SESSION['login']==true ){
        //echo $_SESSION['email'];
      $flat= $_SESSION['flat'];
       echo 'flat Number : '.$flat.'';

          }

     ?>
                    
      <br/>
      <br/>

                    <input type="text" class="form-control" id="first" name="first" placeholder="First Name" required /><br />

                    <input type="text" class="form-control" id="last" name="last" placeholder="Last Name" required /><br />
                    <input type="number" class="form-control" id="age" name="age" placeholder="Age"><br />
                    <input input type="text" class="form-control" id="relation" name="relation" aria-describedby="emailHelp" placeholder="relation"><br />
                    <input type="tel" min="1" max="10" class="form-control" id="mobile_no" name="mobile_no" placeholder="Contact"><br />
                    <button style=" margin-top: 15px;" type="submit" value="submit" class="btn btn-primary">Submit</button></a>

                </form>
            </div>
        </div>
        <div class="footer">
<a style="font-size: 17px; "> SHRI SWAMI RESIDENCY CO-OP HSG SOC LTD </a><br>
	Gate no.849 to 854, Plot no.101, Radheshwari Nagar Wagholi, Pune-412207<br>
<p style="font-size: 17px">
	For any query contact the admin: <br>
	Secretary: +91 9423444828 <br>
Chairman: +91 9822489703</p>

	</div>



        <script>
            $('.message a').click(function() {
                $('form').animate({
                    height: "toggle",
                    opacity: "toggle"
                }, "slow");
            });
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        

    </body>

</html>