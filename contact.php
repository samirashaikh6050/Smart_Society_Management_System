<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
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
.container{
  background:transparent;
}
img{
  float:left;
  
  
}
</style>


<body>

<?php include 'navbar_home.php'; ?>
  <?php include 'database.php';  ?>
  
  <div class="container">
   
  <img src="attachments/img10.jfif" alt="">
  
     <div class="contact-info">
        <h3 class="title" style="color:black;"> SHRI SWAMI SAMARTH RESIDENCY CO-OP HSG SOC LTD</h3>
        <p class="text">
        <div class="container-fluid bg-dark text-light">
<p class="text-center mb-0">Phone no</p>
</div>
          Secretary:+91 900000008<br>
          Chairman: +91 90000103<br>
        </p>

        <div class="info">
          <div class="information">
            <img src="attachments/location.png" class="icon" alt="" />
            <p class="text-center mb-0" style="color:black;">Gate no.849 to 854, Plotno.101, Radheswari Nagar Wagholi Pune 412207</p>
          </div>
          <div class="information">
            <img src="attachments/email.png" class="icon" alt="" />
            <p class="text-center mb-0" style="color:black;">samirashaikh487@gmail.com</p>
          </div>
          <div class="information">
            <img src="attachments/phone.png" class="icon" alt="" />
            <p class="text-center mb-0" style="color:black;">+91 9000000003 </p>
          </div>
        </div>

        <div class="social-media">
          <p style="color:black;">Connect with us :</p>
          <div class="social-icons">
            <a href="https://m.facebook.com/100012199985137/">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://twitter.com/">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="https://instagram.com/i_m_amit29?utm_medium=copy_link">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="https://in.linkedin.com/">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

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