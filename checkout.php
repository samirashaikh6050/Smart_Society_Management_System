<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Smart Society</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/form.css">
  </head>
<style>
  body{
    background:url("attachments/img8.jpg");
    background-size:cover;
  }
  .container-fluid{
  position: relative;
  display: flex;
  justify-content:center;
}
  .box{
  background: #d00000;
  /* background-size: 42px; */
  margin-top: 12%;
  width: 400px;
  border: 50px solidblack;
  height: 92%;
  border-radius: 30px;
  padding: 10px;
  margin-left: 20%;
  margin-bottom:10%;
  margin-right:30%;
  }
  .footer{
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

<?php include 'navbar_member.php'; ?>
<body>

           
    <!-- <h2 style="text-align: center; text-align: center; margin-top: 60px; text-decoration: underline;">Checkout Form</h2> -->
    <div class="container-fluid" >
       
<!-- <form action ="payment.php" method="post">
<div class=box>        
<h2 style="text-align: center; text-align: center; margin-top: 20px; text-decoration: underline;">Checkout Form</h2>

    <div class="form-group">
        <label style="margin-top: 20px; font-weight:bold;" for="exampleInputPassword1">Name</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="name" placeholder="Name">
      </div>
  <div class="form-group" >
    <label for="exampleInputEmail1" style="font-weight:bold;">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label style="font-weight:bold;" for="exampleInputPassword1">Contact No.</label>
    <input type="tel" min="1" max="10" class="form-control" id="exampleInputPassword1" name="mobile" placeholder="Contact no.">
  </div>
  <div class="form-group">
    <label style="font-weight:bold;" for="exampleInputPassword1">Amount </label>
    <input type="number"  class="form-control" id="exampleInputPassword1" name="amount" placeholder="Amount in ₹">
  </div>
  
    <button >Pay Now</button></a>
</form> -->
<div class="login-page">
        <div class="form">
		<form id ="registration" action="payment.php" method="post">
    <h2 > Checkout Form </h2>
            <input  type="text" class="form-control" id="exampleInputPassword1" name="name" placeholder="Name" required/><br>
            <input  type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email" required/><br>
            <input type="tel" min="1" max="10" class="form-control" id="exampleInputPassword1" name="mobile" placeholder="Contact no." required><br>
            <input type="number"  class="form-control" id="exampleInputPassword1" name="amount" placeholder="Amount in ₹" required><br>
            <button style=" margin-top: 10px;" type="submit" class="btn btn-danger"  >Pay Now</button>

            
          </form>
        </div>
      </div>
</div>
    </div>
    <div class="footer">
		<a style="font-size: 17px; "> SHRI SWAMI RESIDENCY CO-OP HSG SOC LTD </a><br>
	Gate no.849 to 854, Plot no.101, Radheshwari NAgar Wagholi, Pune-412207<br>
<p style="font-size: 15px">
	For any query contact the admin: <br>
	Secretary: +91 9423444828 <br>
Chairman: +91 9822489703</p>

	</div>
</body>