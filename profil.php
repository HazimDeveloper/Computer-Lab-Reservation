<?php
session_start();

?>
	<?php 
	include ('config.php');
	  

			 $user_id = $_SESSION['user_id'];		
			//  echo $user_id;
			 // get data 
			 $select_user = mysqli_query($db,"SELECT * FROM daftar WHERE user_id = $user_id");
				
			//  // output data of each row
			 $row = mysqli_fetch_assoc($select_user);
		 
			//update data pengguna
				if(isset($_POST['updateid'])){

				   $user_id = mysqli_real_escape_string($db, $_SESSION['user_id']);
				   $nama = mysqli_real_escape_string($db, $_POST['nama']);
				   $email = mysqli_real_escape_string($db, $_POST['emel']);
				   $bahagian = mysqli_real_escape_string($db, $_POST['bahagian']);
				   $unit = mysqli_real_escape_string($db, $_POST['unit']);
				   $fon = mysqli_real_escape_string($db, $_POST['phoneNum']);
				   
		           $select= "UPDATE daftar SET nama='$nama',emel='$email',bahagian='$bahagian',unit='$unit',phoneNum='$fon' WHERE user_id='$user_id'";

				   $result = mysqli_query($db, $select);

				  if($result){
					  
					//   echo "<script>alert('berjaya update')</script>";
					     header('location: profil.php');
					  }else{
						echo "<script>alert('sql gagal')</script>";
					  }
				};

		 
			  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
	 <link href="pwnlogo.png" rel="icon">
	   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css">
	   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
	   <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Roboto&display=swap" rel="stylesheet">
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
	   <link rel="stylesheet" href="css/tempahanlatest.css">
	   <link rel="stylesheet" href="css/navbar.css">
	
</head>
<body>
		
			 <!--navbar atas tu-->
			<nav class="navbar">
							<div class="navbar-container container">
								<input type="checkbox" name="" id="">
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
									<li><a href="logmasuk.php">Log Keluar</a></li>
								   
								</ul>
								<h1 class="logo">STMK</h1>
							</div>
						</nav>
						
						<!-- bahagian nak tengok profil-->
	
			<div class="container">
				<div class="section-contact">
					<div class="row justify-content-center">
						<div class="col-12 col-lg-10 col-xl-8">
							<div class="header-section text-center">
								<h2 class="title">Maklumat Peribadi</h2>
								<p class="description">Sila isi semua butiran di bawah untuk permohonan makmal komputer di tingkat 11.</p>
								
							</div>
						</div>
					</div>
						
				 <div class="form-contact">
						<form method="post" action="">
							<div class="row">
								<div class="col-md-6">
									<div class="single-input">
									<h5> ID PEMOHON</h5>
										<!-- <label> = "ID USER" </label> -->
										<input type="text" name="name" placeholder="ID USER" value="<?=$row['user_id'] ?>" disabled required />
									</div>
								</div>
								<div class="col-md-6">
									<div class="single-input">
									<h5> NAMA </h5>
										<label = "NAMA PENUH" >
										<input  type="text" name="nama" placeholder="NAMA PENUH" value="<?=$row['nama'] ?>" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="single-input">
										
										<h5> EMEL</h5>
										<input  type="text" name="emel" placeholder="EMEL RASMI"  value="<?=$row['emel'] ?>"  />
									</div>
								</div>
								<div class="col-md-6">
									<div class="single-input">
										
										<h5> NO.TEL</h5>
										<input type="text" name="phoneNum" placeholder="NOMBOR TELEFON"  value="<?=$row['phoneNum']  ?>" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="single-input">
									
									<h5> BAHAGIAN</h5>
										<input type="text" name="bahagian" placeholder="BAHAGIAN"  value="<?=$row['bahagian']  ?>"  />
									</div>
								</div>
								<div class="col-md-6">
									<div class="single-input">
										
										<h5> UNIT</h5>
										<input type="text" name="unit" placeholder="UNIT"   value="<?=$row['unit']  ?>"/>
									</div>
								</div>
								
								<div class="col-12">
									<div class="submit-input text-center">
										<input type="submit" name="updateid" value="KEMASKINI">
									</div>
								</div>
						
							</div>
						</form>
					</div>
				</div>
			</div>

		</div>
					   
</body>
</html>