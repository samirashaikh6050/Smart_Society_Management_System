<?php
    session_start(); //we need session for the log in thingy XD 
    include("functions.php");
?>
<!doctype html>
<html lang="en">
  <link rel="stylesheet" href="css/signupcss.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <head>
  <style>
      body{
        background:url("attachments/img8.jpg");
        background-size: cover;
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
      top: 47.3em;
		}
		.footer p{
	text-align:right;
	bottom:160%;
	right:5%;
	position:relative;
	padding-top:0px;


}
    </style> 
      
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Sign Up</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   

  </head>

    
  <body class="text-center">
  <?php include 'navbar_home.php' ?>
      <div class="container"  style="width:400px; height:400px;  margin-top:25px; border-radius:25px;">
            
            <div class="login-page">
        <div class="form">
		<form id ="registration" action="" method="post">
    <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
              <select name="flat" class="form-select" id="inputGroupSelect01">
                <option selected>flat</option>
                <option value="101">101</option>
                <option value="102">102</option>
                <option value="103">103</option>
                <option value="104">104</option>
                <option value="201">201</option>
                <option value="202">202</option>
                <option value="203">203</option>
                <option value="204">204</option>
                <option value="301">301</option>
                <option value="302">302</option>
                <option value="303">303</option>
                <option value="304">304</option>
                <option value="401">401</option>
                <option value="402">402</option>
                <option value="403">403</option>
                <option value="404">404</option>
                <option value="501">501</option>
                <option value="502">502</option>
                <option value="503">503</option>
                <option value="504">504</option>
                <option value="505">505</option>
              </select>
              <br/>
    <label for="inputEmail" class="sr-only">Firstname</label>
            <input name="firstname" type="text" id="inputEmail" class="form-control" placeholder="Firstname" required autofocus>
            <label for="inputEmail" class="sr-only">Lastname</label>

            <input name="lastname" type="text" id="inputEmail" class="form-control" placeholder="Lastname" required autofocus>
            <label for="inputEmail" class="sr-only">Contact Number</label>

            <input  type="tel"  name="contact_num" type="number" id="contact_num" class="form-control" placeholder="Contact Number" required autofocus>
            

           
           
           
            <label for="inputEmail" class="sr-only">Email address</label>
            <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <button name="signup" class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
              <a href="login.php" class="mt-5 mb-3 text-muted">Go back to login page</a>
        
            
          </form>
            <?php
    
        if(isset($_POST['signup'])  ){
        
    
    if(!empty($_POST['flat'])) {
        $selected=$_POST['flat'];
        
    
    

           
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $contact = $_POST['contact_num'];
            $password = $_POST['password'];
            $email = $_POST['email'];
          
            $message = "$lastname $firstname would like to request an account.";
            $query = "INSERT INTO `requests` (`flat`,`id`, `firstname`, `lastname`,`contact_num`,`email`, `password`, `message`, `date`) VALUES ('$selected','NULL', '$firstname', '$lastname', '$contact','$email', '$password', '$message', CURRENT_TIMESTAMP)";
            if(performQuery($query)){
                echo "<script>alert('Your account request is now pending for approval. Please wait for confirmation. Thank you.')</script>";
            }else{
                echo "<script>alert('Unknown error occured.')</script>";
            }
        }}
    
    ?>

          </div>
      
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
