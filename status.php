<?php
session_start();
?>

<?php

	include ('config.php');
		$user_id = $_SESSION['user_id'];		
		// get data 
		$select_user = mysqli_query($db,'SELECT * FROM tempahan WHERE user_id = '.$user_id.'  ORDER BY tempahanId DESC' );
		
		  // output data of each row
		  $row = mysqli_fetch_assoc($select_user)	
				
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Permohonan</title>
	 <link href="pwnlogo.png" rel="icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/tempahanlatest.css">
	<link rel="stylesheet" href="css/navbar.css">
</head>
	
<body>

			<nav class="navbar">
							<div class="navbar-container container">
								<input type="checkbox" name="" action="">
								<div class="hamburger-lines">
									<span class="line line1"></span>
									<span class="line line2"></span>
									<span class="line line3"></span>
								</div>
								<ul class="menu-items">
									<li><a href="calendar.php">Kalendar</a></li>
									<li><a href="tempahan.php">Permohonan Tarikh</a></li>
									<li><a href="status.php">Status Permohonan</a></li>
									<li><a href="profil.php">Butiran Pengguna</a></li>
									<li><a href="login.php">Log Keluar</a></li>
								   
								</ul>
								<h1 class="logo">STMK</h1>
							</div>
						</nav>

					<!-- form yg isi bagai -->
			<div class="container">
				<div class="section-contact">
					<div class="row justify-content-center">
						<div class="col-12 col-lg-10 col-xl-8">
							<div class="header-section text-center">
								<h2 class="title">Status Permohonan
									
								</h2>
								<p class="description">Kelulusan permohonan anda sedang disemak oleh Admin</p>
								
							</div>
						</div>
					</div>
					<div class="form-contact">
						<form method="post" action="">
							<div class="row">
								<div class="col-md-6">
									<div class="single-input">
										<h5> ID TEMPAHAN</h5>
										<input action="" name="id" value="<?= $row['tempahanId'] ?>" disabled required />
									</div>
								</div>
								<div class="col-md-6">
									<div class="single-input">
										<h5> SEBAB PERMOHONAN</h5>
										<input type="text" name="sebab" placeholder="SEBAB PERMOHONAN" value="<?=$row['sebab']?>" disabled required />
									</div>
								</div>
								<div class="col-md-6">
									<div class="single-input">
										<h5> TARIKH MULA DIGUNAKAN</h5>
										<input type="date" placeholder="TARIKH MULA MENGGUNAKAN MAKMAL" name="dateStart" disabled required value="<?=$row['dateStart']  ?>"/>
									</div>
								</div>
					
								<div class="col-md-6">
									<div class="single-input">
										<h5> TARIKH AKHIR DIGUNAKAN</h5>
										<input type="date" name="dateStart" placeholder="TARIKH AKHIR MENGGUNAKAN MAKMAL"  disabled required value="<?=$row['dateStop']  ?>"/>
									</div>
								</div>
							     <div class="col-md-6">
									<div class="single-input">
										<h5> STATUS PERMOHONAN</h5>
										<label>
										 <?php if($row['status']  == "" ){?>
										 <input type="text" name="status" required disabled value="in progress" value="<?=$row['status']  ?>" disabled required />
										 <?php }else{?>
										 <input type="text" name="status" required disabled  placeholder="STATUS AKAN DIKEMASKINI" value="<?=$row['status']  ?>" disabled required />
										 <?php }?>
										 <label/>
									</div>
								 </div>
						
						</form>
					</div>
				</div>
			</div>				 
</body>
</html>