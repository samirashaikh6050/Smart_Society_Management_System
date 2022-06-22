<?php 
    include("functions.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Notices/Events</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="css/n.css">
</head>

<style>
  body{
    
    background:url(attachments/background.jpg);
    background-size:cover;
    display: flex;
    flex-direction: column;
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
  <?php include 'navbar_admin.php'; ?>
  <?php
  
$conn = new mysqli ('localhost:3345', 'root', '', 'Pendingrequestsystem');
session_start();

// If form submitted, insert values into the database.
if ($_SERVER["REQUEST_METHOD"] == "POST"){
        // removes backslashes



 $notice= stripslashes($_POST['txt']);
 $notice = mysqli_real_escape_string($conn,$notice);

 $dat= stripslashes($_POST['dat']);
 $dat= mysqli_real_escape_string($conn,$dat);

 $tim= stripslashes($_POST['tim']);
 $tim = mysqli_real_escape_string($conn,$tim);


$query = "INSERT into notice(Login_Email,Message1,Date1,Time1)
VALUES ('Admin','$notice','$dat','$tim')";
        $result1 = mysqli_query($conn,$query);


        if($result1){
          echo ("<script LANGUAGE='JavaScript'>
    window.alert('Notice Board Succesfully Updated');
    window.location.href='http://localhost/ns/society/notice.php';
    </script>");
   }
    }else{
      
  ?>

<!--------------------------------------------- NEW CODE ------------------------------->
<!-- <div class="simpleformdetails">
    <div class= "box">
    <form id ="registration" action="" method="post">
    <h2 style="text-decoration: underline; text-align: center;"> Upload Important Messages </h2>
    <div class="form-group">
        <label style="margin-top: 20px; font-weight:bold;" for="exampleInputPassword1">Email Id</label>
        <input type="email" class="form-control" id="button" name="username" placeholder="Email Id">
      </div>
      <div class="form-group">
        <label style="margin-top: 15px; font-weight:bold;" for="exampleInputPassword1">Notice/Events</label>
        <textarea  class="form-control" id="button" name="txt" placeholder="Type the message here..." rows="3" cols="30"></textarea>
      </div>
      <div class="form-group">
        <label style="margin-top: 15px; font-weight:bold;" for="exampleInputPassword1">Date</label>
        <input type="date" class="form-control" id="button" name="dat">
      </div>
      <div class="form-group">
        <label style="margin-top: 15px; font-weight:bold;" for="exampleInputPassword1">Time</label>
        <input type="time" class="form-control" id="button" name="tim">
      </div>
      <div class="d-grid gap-2 d-md-block" style="margin-top: 15px;">
        <button style="margin-left: 35%;" class="btn btn-danger" type="submit" value="Submit">Submit</button>
        <button class="btn btn-danger" type="reset" value="Clear" >Clear</button>
      </div>
    </form>
    </div>
</div> -->
<div class="login-page">
        <div class="form">
		<form id ="registration" action="" method="post">
    <h2 > Upload Important Message </h2>
    <br />
     
            <h3>Notice/Events</h3>
        <textarea  class="form-control" id="button" name="txt" placeholder="Type the message here..." rows="3" cols="30"></textarea><br>
            <input type="date" class="form-control" id="button" name="dat" required/><br>
            <input input type="time" class="form-control" id="button" name="tim"><br>
            <button   class="btn btn-danger" type="submit" value="Submit">submit</button>
            
          </form>
        </div>
      </div>
      <div class="footer">
<a style="font-size: 17px; "> SHRI SWAMI RESIDENCY CO-OP HSG SOC LTD </a><br>
	Gate no.849 to 854, Plot no.101, Radheshwari Nagar Wagholi, Pune-412207<br>
<p style="font-size: 17px;">
	For any query contact the admin: <br>
	Secretary: +91 9423444828 <br>
Chairman: +91 9822489703</p>

	</div>

<?php }
?>
<script>$('.message a').click(function(){
        $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
     });</script>
     
	
</body>
</html>