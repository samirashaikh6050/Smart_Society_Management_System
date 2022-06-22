<!DOCTYPE html>
<html>
<head>
	 <!-- Bootstrap CSS -->
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
  body{
    background:url("attachments/img8.jpg");
	background-size: cover;
  }
</style>
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
		table, th,td
{
	border: 2px solid black;
	border-collapse: collapse;
}
		th,td
		{
			padding: 15px;

		}
		th{
			text-align: left;
			
		}
		 		
		th{
			background-color: white ;
			
		}
		tbody tr:nth-child(even){
		background-color:#e5e4e2 ;
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
	
	<title>Noticeboard</title>
	
</head>
<?php include 'navbar_member.php'; ?>
<link rel="stylesheet" type="text/css" href=""/>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pendingrequestsystem"; 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT Login_email, Message1, Date1, Time1 FROM notice";
$result = mysqli_query($conn, $sql);

mysqli_close($conn);
?>

<body>
	  

<header>
	<div class="tab">
	<h1 align="center"> Noticeboard</h1> <br>
    <table align="center" style="width:1300px;"> 
     	<tr>
    	    <th> Email-Id </th>
    	    <th> Notice/Events </th>
    	    <th> Date </th>
    	    <th> Time </th>
    	</tr>
    		
   <?php 
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    ?>
    <tr>
    	<td><?php echo $row['Login_email'];?></td>
    	<td><?php echo $row['Message1'];?></td>
    	<td><?php echo $row['Date1'];?></td>
    	<td><?php echo $row['Time1'];?></td> 
    </tr>
    </div>
    <?php 
}
?>

    </table>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="navbar.js"></script>
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
