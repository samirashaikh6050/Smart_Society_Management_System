<!DOCTYPE html>
<html>
<head>
	 <!-- Bootstrap CSS -->
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

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
        
      }table * {
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
	
	<title>Noticeboard</title>
	
</head>
<?php include 'navbar_home.php'; ?>



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

$sql = "SELECT Login_email, Message1, Date1, Time1 FROM notice";
$result = mysqli_query($conn, $sql);

mysqli_close($conn);
?>

<body>
	  

<header>
	<div class="tab">
	<h1 align="center" style="text-decoration:underline;"> Noticeboard</h1> <br>
    <table align="center" style="width:1300px; "> 
	<thead>
     	<tr>
    	    <th> Type</th>
    	    <th> Notice/Events </th>
    	    <th> Date </th>
    	    <th> Time </th>
    	</tr>
	</thead>
    		
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
	<?php include 'functions.php' ; ?>
	</body>
</html>
