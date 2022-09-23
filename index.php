<!DOCTYPE html>
<html>
<head>
	<!-- ini Css Bootstrap 4 -->
	<link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="Assets/css/bootstrap.min.css">

	<!-- ini favicon -->
	<link rel="shortcut icon" href="Images/icon/logo.png">

	<script src="https://kit.fontawesome.com/22cf094084.js" crossorigin="anonymous"></script>

	<title>R-PC Consultant</title>
</head>
<style type="text/css">
   @font-face {
         font-family: "Font Closeness";
         src: url('Assets/font/Closeness.ttf');
         }

   .close {
         font-family: "Font Closeness";
         }
    @font-face {
    	font-family: "Font Rocky";
    	src: url('Assets/font/rockin_record.ttf');
    }
    .rocky{
    	font-family: "Font Rocky";
    }
</style>
<body>
<!-- Fungsi Page -->
<?php
include 'Inc/conn.php';
include 'Inc/header.php';
if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "Page/home.php";
				break;
			case 'part':
				include "Page/part.php";
				break;
			case 'casemod':
				include "Page/casemod.php";
				break;			
			default:
				include "Page/404.php";
				break;
		}
	}else{
		include "Page/home.php";
	}

?>
<footer class="footer">
      <div class="jumbotron bg-info">
      	<div class="container">
        	<center><span style="color:white;">&copy; 2021 - Rizki Dwi Nugraha - Web Eastern</span></center>
        </div>
      </div>
</footer>
<!-- ini JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="Assets/js/bootstrap.js"></script>
<script src="Assets/js/bootstrap.min.js"></script>

</body>
</html>