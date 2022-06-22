<?php
session_start();

include 'database.php';
?>




<!DOCTYPE html>
<html>
<head>
<title>Requests/Complains </title>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="css/request.css">
</head>
<style>
  body{
    background:url(attachments/background.jpg);
    background-size:cover;
  }
  .nav-item ul li a{
        	
	        color:#fff;
          
        background-color: black;

      }
      .hover-effect:hover{
        background-color: grey;
        border:2px black;
        color: white;
        
      }
  .simpleform{
  position: relative;
  display: flex;
  justify-content:center;
  }
  .box{
    background:#bfdbf7;
   background-size: 42px; 
   margin-top: 5%;
   width: 30%;
   border: 15px transparent;
   height: 95%;
   border-radius: 45px;
  padding: 10px;
  }
  .footer{
    text-align: left;
			position: fixed;
			height: 8%;
			left:0;
			bottom: 0;
			width: 100%;
			background-color: black;
			color:  white;
			padding-left:20px;
			padding-top:20px;
      top: 3oem;
		}
		.footer p{
	text-align:right;
	bottom:160%;
	right:5%;
	position:relative;
	padding-top:0px;


}
</style>

<body>
<?php include 'navbar_member.php' ?>

  <?php
$conn = new mysqli ('localhost:3345', 'root', '', 'Pendingrequestsystem');


// If form submitted, insert values into the database.
if($_SERVER["REQUEST_METHOD"]=="POST"){
        // removes backslashes
        if(isset($_SESSION['login']) && $_SESSION['login']==true ){
          //echo $_SESSION['email'];
          $flat= $_SESSION['flat']; }


 $fname = stripslashes($_POST['fname']);
        //escapes special characters in a string
  $fname = mysqli_real_escape_string($conn,$fname); 
 
 $username= stripslashes($_POST['username']);
 $username = mysqli_real_escape_string($conn,$username);
 
 $mobile = stripslashes($_POST['mobile']);
 $mobile = mysqli_real_escape_string($conn,$mobile);

 $txt= stripslashes($_POST['txt']);
 $txt = mysqli_real_escape_string($conn,$txt);


 
$query2 = "INSERT into request_complains(flat,Full_name,Login_email,Contact_no,Message)
VALUES ('$flat','$fname','$username','$mobile','$txt')";
        $result1 = mysqli_query($conn,$query2);

        if($result1){
          echo ("<script LANGUAGE='JavaScript'>
          window.alert('Request/Complain Succesfully Sent To Admin, Thank You !!!');
          window.location.href='http://localhost/ns/society/request.php';
          </script>");  
   }
    }
?>

<!---------------------------------- NEW CODE -------------------------------------------------------->
<!-- <div class="simpleform">
  <div class="box">
<form  id ="registration" action="" method="post">
<h1 style="text-align: center; text-decoration: underline;">Request/Complains</h1>  
<div class="form-group">
  <label style="margin-top: 20px; font-weight:bold;" for="exampleInputPassword1">Full Name</label>
  <input type="text" class="form-control" id="button" name="fname" placeholder="Full Name">
</div>
<div class="form-group">
  <label style="margin-top: 20px; font-weight:bold;" for="exampleInputPassword1">Email Id</label>
  <input type="text" class="form-control" id="button" name="fname" placeholder="Full Name">
</div>
<div class="form-group">
  <label style="margin-top: 20px; font-weight:bold;" for="exampleInputPassword1">Mobile No.</label>
  <input type="tel" class="form-control" id="first" name="mobile" placeholder="Mobile no.">
</div>
<div class="form-group">
  <label style="margin-top: 20px; font-weight:bold;" for="exampleInputPassword1">Request/Complaint</label>
  <textarea  class="form-control" id="first" name="txt" placeholder="Enter your request/complaint here" rows="3" cols="30"></textarea>
</div>
<button style="margin-left: 40%; margin-top: 15px;" type="submit" value="submit" class="btn btn-danger"> Submit</button></a>
</form>
</div>
</div> -->
                              <!-- new code  -->
                              <div class="login-page">
        <div class="form">
		<form id ="registration" action="request.php" method="post">
    <h2 > Request/Complains</h2>

    <br/>
                    <?php 
     
     if(isset($_SESSION['login']) && $_SESSION['login']==true ){
        //echo $_SESSION['email'];
      $flat= $_SESSION['flat'];
       echo 'flat Number : '.$flat.'';

          }

     ?>

            <input  type="text" class="form-control" id="button" name="fname" placeholder="Full Name"><br>
            <input type="email" class="form-control" id="first" name="username" placeholder="Email Id"/><br>
            <input type="tel" class="form-control" id="first" name="mobile" placeholder="Mobile no."><br>
            <h3>Request&Complaints</h3>
            <textarea  class="form-control" id="first" name="txt" placeholder="Enter your request/complaint here" rows="3" cols="30"></textarea>
            <button style=" margin-top: 15px;" type="submit" value="submit" class="btn btn-danger">submit</button>
            
          </form>
        </div>
      </div>

<script>$('.message a').click(function(){
        $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
     });</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<div class="footer">
		<a style="font-size: 17px; "> SHRI SWAMI RESIDENCY CO-OP HSG SOC LTD </a><br>
	Gate no.849 to 854, Plot no.101, Radheshwari Nagar Wagholi, Pune-412207<br>
<p style="font-size: 17px">
	For any query contact the admin: <br>
	Secretary: +91 9423444828 <br>
Chairman: +91 9822489703</p>

	</div>

</body>
</html>