<?php
    session_start(); //we need session for the log in thingy XD 
    include("functions.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Admin Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  

  <link rel="stylesheet" href="css/l.css">
</head>
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
 
  
header{
	background-image:url(background.jpeg); 
	height: 100vh;
	background-size: cover;
	background-position: center;
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
  <?php include 'navbar_home.php'; ?>

  <body class="text-center">
      <?php
      
        if(isset($_POST['signin'])){
            
            $password = $_POST['password'];
            $email = $_POST['email'];
            $query = "SELECT * from `admin` WHERE email = '$email' AND password = '$password';";
            if(count(fetchAll($query)) > 0){ //this is to catch unknown error.
                  foreach(fetchAll($query) as $row){
                    if($row['email']==$email&&$row['password']==$password){
                        $_SESSION['login'] = true;
                        $_SESSION['type'] = $row['type'];
                        header('location:adminn.php');
                    }else{
                        echo "<script>alert('Wrong login details.')</script>";
                    }
                }
            }else{
                echo "<script>alert('Error.')</script>";
            }

        }
      
      ?>
       
		  <div class="login-page">
      <form method="post" action="admindash.php" class="form-signin">
        <div class="form">
        <h1 class="h3 mb-3 font-weight-normal">Admin Login</h1>	
        <br/>
        <label for="inputEmail" class="sr-only">Email address:</label>
        
            <input  name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required/>
            <label for="inputPassword" class="sr-only">Password:</label>
            <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required/>
            <button  name="signin" class="btn btn-lg btn-primary btn-block" type="submit">login</button>
            
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
      <script>$('.message a').click(function(){
        $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
     });</script>
     
     
  </body>
</html>
