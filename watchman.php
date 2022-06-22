<!DOCTYPE html>
<html>
<head>
    <title>Smart Society</title>
    <!-- CSS only -->
    <style>
	body{
    background:url(attachments/background.jpg);
    background-size:cover;
  }
.box{
    width: 200px;
    position: absolute;
    left: 520px;
    top: 10%;
    
}
.bar{
  background-color: rgb(163, 231, 231);
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
	
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<?php include 'navbar_watchman.php'; ?>
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

$sql = "SELECT flat, firstname, contact_num FROM accounts";
$result = mysqli_query($conn, $sql);

mysqli_close($conn);
?>
<body>
    <div class="container-fluid box" style="width: 500px;">
        <h2>Search for contacts</h2>
        <form class="d-flex" method="POST" action="#">
          <input class="form-control me-2 bar" id="myInput" onkeyup="searchFun()" type="search" placeholder="Search for flat number..." aria-label="Search" name="search" style="background-color:rgb(234, 235, 240);">
          <!-- <button type="button" class="btn btn-primary"><i class="bi bi-search"></i></button> -->
        </form>
      </div>
      <div class="limiter">
        <div class="container-table100">
          <div class="wrap-table100">
            <div class="table100">
              <table id="myTable">
                <thead>
                  <tr class="table100-head">
                    <th class="column1">Flat No.</th>
                    <th class="column2">Name</th>
                    <th class="column3">Contact No.</th> 
                    <!-- <th class="column4">Price</th>
                    <th class="column5">Quantity</th>
                    <th class="column6">Total</th> -->
                  </tr>
                </thead>
                <tbody>   
                <?php 
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    ?>
    <tr id="myUL">
    	<td style="text-align: center;"><?php echo $row['flat'];?></td>
    	<td><?php echo $row['firstname'];?></td>
    	<td><?php echo $row['contact_num'];?></td>
    	<!-- <td><?php echo $row['contact_num'];?></td>  -->
    </tr>
    </div>
    <?php 
}
?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <script src="script.js"></script>
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