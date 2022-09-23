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
</head>
<body>
<?php
	include 'Inc/conn.php';
	include 'Inc/header.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from tb_part where id='$id'");
    while($d = mysqli_fetch_array($data)){
?>
<img src="Images/error/error-1.jpg" style="width:100%; height:65px;">

<div class="container" style="margin-top: 10px;">
	<p style="text-align:left; font-size: 18px;">
		<img src="Images/part/<?php echo $d['foto_part']; ?>" style="float:left; width: 500px;">
		<span style="margin-left: 10%; font-size: 23px;">Produk :</span><br>
		<span style="margin-left: 10%; font-size: 17px;"><b><?php echo $d['nama_part'];?></b></span><br><br>

		<span style="margin-left: 10%; font-size: 23px;">Jenis Part :</span><br>
		<span style="margin-left: 10%; font-size: 17px; color:grey;"><b>
			<?php 
				if (isset($d['jenis_part'])) {
					if($d['jenis_part'] == 1){
						echo "Motherboard";
					} 
					 else if($d['jenis_part'] == 2){
						echo "Processor";
					} 
					else if($d['jenis_part'] == 3){
						echo "VGA/Graphic Card";
					} 
					else if($d['jenis_part'] == 4){
						echo "HDD";
					} 
					else if($d['jenis_part'] == 5){
						echo "SSD";
					} 
					else if($d['jenis_part'] == 6){
						echo "RAM";
					} 
					else if($d['jenis_part'] == 7){
						echo "Power Supply";
					} 
					else if($d['jenis_part'] == 8){
						echo "Fan Processor/HSF";
					} 
					else if($d['jenis_part'] == 9){
						echo "Fan Casing 12cm";
					} 
					else if($d['jenis_part'] == 10){
						echo "Heatsink";
					} 
					else if($d['jenis_part'] == 11){
						echo "Led Strip";
					}
					else if($d['jenis_part'] == 12){
						echo "Monitor";
					}
					else if($d['jenis_part'] == 13){
						echo "Gaming Gear";
					} else {
						echo "<span style='color:red;'>Invalid</span>";
					}
				} 
				
			?></b></span><br><br>

		<span style="margin-left: 10%; font-size: 23px;">Deskripsi :</span><br>
		<span style="margin-left: 10%; font-size: 17px; color:grey;"><b><?php echo $d['deskripsi_part'];?></b></span><br><br>
		<hr><a href="index.php?page=part" class="btn btn-info"><i class="fa fa-arrow-left"></i> Back to part</a>
	</p>
</div>
<?php } ?>
<footer class="footer" style="margin-top: 30%;">
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