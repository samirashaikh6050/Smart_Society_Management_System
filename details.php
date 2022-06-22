<html>
<head>
  <title>Payment Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<style>
  body{
    background:url(attachments/background.jpg);
    background-size:cover;
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
    background: #bfdbf7;
    /* background-size: 42px; */
    margin-top: 10%;
    width: 400px;
    border: 50px solidblack;
    height: 92%;
    border-radius: 30px;
    padding: 10px;
    margin-left: 20%;
    margin-bottom:10%;
    margin-right:30%;
    
    
  }
</style>
<body>
<?php include 'navbar_member.php' ?>
<?php 
session_start();
include 'database.php';
    if(isset($_SESSION['login']) && $_SESSION['login']==true){
        // echo $_SESSION['email'];
      $flat= $_SESSION['flat'];
      $sql = "SELECT * FROM `bills` WHERE flat='$flat'";
      $result = mysqli_query($conn,$sql);
      if($row=mysqli_fetch_assoc($result)){
        $details=$row['details'];
        $water=$row['water_charge'];
        $maintainance = $row['maintanance_charge'];
        $extra= $row['extra_charges'];
       
        echo '<div class="simpleform">
        <div class="box">
         <div  class="alert alert-success alert-dismissible fade show" role="alert">
        <strong> Water  Charge :</strong><strong>' .$water.' Rs <br/></strong>
        <strong> Maintenance Charge :</strong><strong>'.$maintainance.' Rs  <br/></strong>
        <strong> Extra Charge : </strong><strong>'.$extra.' Rs  <br/></strong> 
       <strong>  Remark :</strong> <strong>'.$details. ' </strong>
        
       
      </div>';
      
      

      }
      else{
        echo '<div class="simpleform">
        <div class="box"> 
        <h2>No charge</h2> ';
      }
      

    }   
    
?>
  
<div class="container">
 
<form action="checkout.php">
  
<button style="margin-left: 40%; margin-top: 15px;" type="submit" class="btn btn-danger">Pay Now</button>

</div>

</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
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