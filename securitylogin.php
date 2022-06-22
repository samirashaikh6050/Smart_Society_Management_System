<?php
     //we need session for the log in thingy XD 
    include("functions.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Security Login </title>
     <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/form.css">
<style>
  .nav-item ul li a{
        	
	        color:#fff;
          
        background-color: black;

      }
      .hover-effect:hover{
        background-color: grey;
        border:2px black;
        color: white;
        
      }
      body{
    background:url(attachments/background.jpg);
    background-size:cover;
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

  </head>
  <?php include 'navbar_home.php'; ?>

  <body class="text-center">
      
     <body class="text-center">
      <?php
      
        if(isset($_POST['signin'])){
            
            $password = $_POST['password'];
            $email = $_POST['email'];
            $query = "SELECT * from `security_login` WHERE Login_email = '$email' AND Login_pass = '$password'";
            if(count(fetchAll($query)) > 0){ //this is to catch unknown error.
                  foreach(fetchAll($query) as $row){
                    if($row['Login_email']==$email&&$row['Login_pass']==$password){
                        $_SESSION['login'] = true;
                        $_SESSION['type'] = $row['type'];
                        header('location:securitydash.php');
                    }else{
                        echo "<script>alert('Wrong login details.')</script>";
                    }
                }
            }else{
                echo "<script>alert('Error.')</script>";
            }

        }
      
      ?>
      
          <!--------------------------------------------- NEW CODE -------------------->
          
		  <div class="login-page">
        <div class="form">
        <h1 class="h3 mb-3 font-weight-normal">Security Login</h1>
		<form method="post" action="shandlelogin.php" class="login-form">
      <br/>
      <label for="inputEmail" class="sr-only">Email address:</label>
        
            <input  name="email" type="email" id="email" class="form-control" placeholder="Email address" required/>
            <label for="inputPassword" class="sr-only">Password:</label>
            <input name="password" type="password" id="password" class="form-control" placeholder="Password" required/>
            <button  name="signin" class="btn btn-lg btn-primary btn-block" type="submit">login</button>
            <p class="message">Not registered? <a href="securitysignup.php">Create an account</a></p>
          </form>
        </div>
      </div>
      <script>$('.message a').click(function(){
        $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
     });</script>

<div class="footer">
		<a style="font-size: 17px; "> SHRI SWAMI RESIDENCY CO-OP HSG SOC LTD </a><br>
	Gate no.849 to 854, Plot no.101, Radheshwari Nagar Wagholi, Pune-412207<br>
<p style="font-size: 15px">
	For any query contact the admin: <br>
	Secretary: +91 9423444828 <br>
Chairman: +91 9822489703</p>

	</div>
  </body>
</html>
