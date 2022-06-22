<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/form.css">
<title>Add Charges</title>
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
    background:url(attachments/img8.jpg);
    background-size: cover;
  }
  .footer{
			position: fixed;
      text-align: left;
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


<body>
<?php include 'navbar_admin.php' ?>
  

  <div class="simpleform">
    <div class="box">
<?php $flat=$_GET['flatid'];?>
<!-- <form id ="registration" action="handle_charges.php?flatno=<?php echo $flat; ?>" method="post">
<h1>Society Charges</h1>

<label style="font-weight:bold;"  for="flat_no">Flat no: <strong><?php echo $flat; ?></strong> </label>
        <div class="form-group">
        <input type="checkbox" id="water" onclick="myFunction(this.id)">
<label  style="font-weight: bold;" for="water_charges">Water Charges:</label><br>
<!-- <input type="checkbox" name="watercharges" id="watercharges" value="checked"> -->
<!-- <input type="number" name="water_charges" id="water_charges" size=15 placeholder="Rs." style="display: none;">
    </div>
    <div class="form-group">
    <input type="checkbox" id="maintain" onclick="myFunction(this.id)">
<label style="font-weight: bold;" for="maintain_charges">Maintenance Charges:</label><br>
 <input type="number" name="maintain_charges" id="maintain_charges" size=8 placeholder="Rs." style="display: none;">
 </div>
 <div class="form-group">
 <input type="checkbox" id="extra" onclick="myFunction(this.id)">
   <label style="font-weight:bold;" for="extra_charges">Extra Charges:</label><br>
 <input type="number" name="extra_charges" id="extra_charges" size=8 placeholder="Rs." style="display: none;">
</div>

<div class="form-group">
  <label  style="font-weight:bold;" for="reason">Remark:</label><br>

<textarea   name="reason" id="reason" placeholder="Enter the extra charges detail here...." rows="7" cols="40" style="display:none">
</textarea>
</div>
  <input style="margin-left: 40%; margin-top: 15px;" class="btn btn-primary" type="submit" value="Submit" name="submit">&nbsp&nbsp&nbsp

</form> -->
 <div class="login-page">
        <div class="form">
		<form id ="registration" action="handle_charges.php?flatno=<?php echo $flat; ?>" method="post">
    <h2 > Add Charges </h2>
    
<label style="font-weight:bold;"  for="flat_no">Flat no: <strong><?php echo $flat; ?></strong> </label>
<br/>
<br/>

    <input  type="checkbox" id="water" onclick="myFunction(this.id)"/>
    <label  style="font-weight: bold;" for="water_charges">Water Charges:</label>
    <br/>
    

    <input type="number" name="water_charges" id="water_charges" size="500" placeholder="Rs." style="display: none; width :100%">

              <input  type="checkbox" id="maintain" onclick="myFunction(this.id)"/>
            <label style="font-weight: bold;" for="maintain_charges">Maintenance Charges:</label>
            <br/>
            <input  type="number" name="maintain_charges" id="maintain_charges" size=8 placeholder="Rs." style="display: none; width :100%"/>
            <input  type="checkbox" id="extra" onclick="myFunction(this.id)"/>
            <label style="font-weight:bold;" for="extra_charges">Extra Charges:</label>
            <input  type="number" name="extra_charges" id="extra_charges" size=8 placeholder="Rs." style="display: none; width :100%"/>
            <br/>
            <label  style="font-weight:bold;" for="reason">Remark:</label><br>
            <textarea   name="reason" id="reason" placeholder="Enter the extra charges detail here...." rows="7" cols="40" style="display:none; width :100%">
</textarea>
     
<!-- <input style="margin-top: 15px;" class="btn btn-primary" type="submit" value="Submit" name="submit">&nbsp&nbsp&nbsp -->
<button  style="margin-top: 15px;" class="btn btn-primary" type="submit" value="Submit" name="submit">Submit</button>
            
            
            
          </form>
        
<script>
function myFunction(id) {
  var checkBox = document.getElementById(id);
  var text = document.getElementById(id+"_charges");
  var reason = document.getElementById('reason');
  if (checkBox.checked === true) {
    text.style.display = "block";
    if (checkBox.id === "extra"){
      reason.style.display = "block"
    }
  }
   else {
    text.style.display = "none";
    reason.style.display = "none";
  }
}

</script>
<div class="footer">
		<a style="font-size: 17px; "> SHRI SWAMI RESIDENCY CO-OP HSG SOC LTD </a><br>
	Gate no.849 to 854, Plot no.101, Radheshwari NAgar Wagholi, Pune-412207<br>
<p style="font-size: 17px">
	For any query contact the admin: <br>
	Secretary: +91 9423444828 <br>
Chairman: +91 9822489703</p>

	</div>
 
</body>
</html>