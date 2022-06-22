<!DOCTYPE html>
<html>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
	
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<title>Sibbling Details</title>
</head>
<link rel="stylesheet" type="text/css" href=""/>


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

$sql = "SELECT * FROM tbl_family";
$result = mysqli_query($conn, $sql);

mysqli_close($conn);
?>
<body>	
<?php include 'navbar_admin.php' ?>
  <div class="tab">	
  <table align="center" style="width:1300px;"> 
  <h1 align="center"   style="text-decoration:underline; margin: left 40%;"> Sibbling Details</h1><br />
      <thead>
     <tr>
		    <th > Flat no. </th>
  			
    		
        	<th > First Name</th>
        	<th > Last Name </th>
   	    	<th > Age</th>
		    <th > Relation </th>
			<th > Mobile Number</th>
   	    	
        </tr>
	  </thead>
   <?php 
   while($row = mysqli_fetch_array ($result, MYSQLI_ASSOC)) {
    ?>
    <tr>
	    <td> <?php
		echo $row['flat'];

?></td>
    	<td><?php echo $row['first'];?></td>
    	
    	<td><?php echo $row['last'];?></td>
    	<td><?php echo $row['age'];?></td>
		<td><?php echo $row['relation'];?></td>
		
		 
		<td><?php echo $row['mobile_no'];?></td>
		
		</form>  
    </tr>
    </div>
    <?php 
}
?>
    </table>
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