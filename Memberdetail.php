<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<head>
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

table * {
  position: relative;
}
table td, table th {
  padding-left: 8px;
}
table thead tr {
  height: 60px;
  background: #36304a;
  color: #fff;
}
table tbody tr {
  height: 50px;
}





		</style>
	
	<title>Member Details</title>
</head>



<?php
$servername = "localhost:3345";
$username = "root";
$password = "";
$dbname = "pendingrequestsystem"; 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT  flat, firstname, lastname, email,password,paid_money,unpaid_money,total_money FROM accounts";
$result = mysqli_query($conn, $sql);

mysqli_close($conn);
?>
<body>
	


	<?php
	include 'navbar_admin.php';
	if (isset($_GET['charges']) && $_GET['charges']=="Charges Added Successfully" ){
		echo '<div class="alert alert-success alert-success fade show" role="alert">
		<strong>Successfull!</strong> All the charges applied on Flat no '.$_GET['flatno'].'.
		
	  </div>';
	}
	
	?>
	<!-- <caption>Member Details</caption> -->
  <div class="tab">	
  <table align="center" style="width:1400px;"> 
  <br />
  <h1 align="center"   style="text-decoration:underline; margin: left 40%;"> Member Details</h1>
   <br />
  

   <thead>
       <tr>
		    <th> Flat no. </th>
  			
    		
        	<th> First Name</th>
        	<th> Last Name </th>
   	    	<th> Email</th>
		   
			<th> Password </th>
   	    	<th> Add Charges </th>
			<th> Paid Money </th>
			<th> Remaining Money </th>
			<th> Total Money </th>
        </tr>
   </thead>
    		
   <?php 
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    ?>
    <tr>
	    <td><?php echo $row['flat'];?></td>
    	<td><?php echo $row['firstname'];?></td>
    	<td><?php echo $row['lastname'];?></td>
    	<td><?php echo $row['email'];?></td>
	
		<td><?php echo $row['password'];?></td>
		<td> <a href="add_charges.php?flatid=<?php echo $row['flat'] ?>"><input type="submit" class="btn btn-primary" name="Add" value="Add Charges"></a></td>
		 
		<td><?php echo $row['paid_money'];?></td>
		<td><?php
		$unpaid_total = $row['unpaid_money'];
		if ($unpaid_total == "0"){
			
			echo '2000';  
		}
		else{
			echo $unpaid_total;
		}?></td> 
		
		
		<td><?php
		$total = $row['total_money'];
		
		if ($total == "0"){
			
			echo '2000';  
		}
		else{
			echo $total;
		}?></td>
		
    </tr>
    </div>
    <?php 
}
?>
    </table>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<br/>
	<br/>
	
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
