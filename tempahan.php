<?php
session_start();
?>
<?php 
include ('config.php');
function function_alert($message){
							  
// Display the alert box    
echo "<script>alert('$message');</script>";
								}
if(isset ($_POST ['tempahan'])){
	
	
	
	$nama = $_POST['nama'];
	$email = $_POST['emel'];
	$fon = $_POST['phoneNum'];
	$bahagian = $_POST['bahagian'];
	$unit = $_POST['unit'];
	$start = $_POST['dateStart'];
	$stop = $_POST['dateStop'];
	$reason = $_POST['sebab'];
	$user_id = $_SESSION['user_id'];
	$select_user = mysqli_query($db,"SELECT * FROM tempahan WHERE dateStart = '$start'");
	
			
		
		if(mysqli_num_rows($select_user) == 0 ){
		   
		   $insert_tempahan = "INSERT INTO tempahan(user_id, nama, emel, phoneNum, bahagian, unit, dateStart, dateStop, sebab) VALUES ('$user_id','$nama','$email','$fon','$bahagian','$unit','$start','$stop','$reason')" or die("gagal query");

			if ($db->query($insert_tempahan) == true){				
				// Function call
				function_alert("PERMOHONAN ANDA BERJAYA");
									
			}		

		}else{
						
			  
			  
						function_alert("TARIKH PERMOHONAN ANDA TELAH DIGUNAKAN");
		        
		    $db->close();


		}
		
	 }

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
								<h2 class="title">Butiran Permohonan
									
								</h2>
								<p class="description">Sila isi semua butiran di bawah untuk permohonan makmal komputer di tingkat 11.</p>
								
							</div>
						</div>
				</div>
					<div  class="form-contact">
						<form name= "select_user" method="post" action="">
							<div class="row">
								<div class="col-md-6">
									<div class="single-input">
										<h5> NAMA</h5>
										<input type="text" name="nama" placeholder="NAMA PENUH"  required />
									</div>
								</div>
								<div class="col-md-6">
									<div class="single-input">
										<h5> EMEL</h5>
										<input type="email" name="emel" placeholder="EMEL RASMI"  required />
									</div>
								</div>
								<div class="col-md-6">
									<div class="single-input">
										<h5> NO.TEL</h5>
										<input type="tel" name="phoneNum" placeholder="NOMBOR TELEFON"  required />
									</div>
								</div>
								<div class="col-md-6">
									<div class="single-input">
									<h5> BAHAGIAN</h5>
										<input type="text" name="bahagian" placeholder="BAHAGIAN"  required />
									</div>
								</div>
								<div class="col-md-6">
									<div class="single-input">
										<h5> UNIT</h5>
										<input type="text" name="unit" placeholder="UNIT"   required />
									</div>
								</div>
								<div class="col-md-6">
									<div class="single-input">
										<h5> TARIKH MULA PERMOHONAN</h5>
										<input type="date" name="dateStart" placeholder="TARIKH MULA MENGGUNAKAN MAKMAL"  required />
									</div>
								</div>
								<div class="col-md-6">
									<div class="single-input">
									<h5> TARIKH AKHIR PERMOHONAN</h5>
										<input type="date" name="dateStop" placeholder="TARIKH AKHIR MENGGUNAKAN MAKMAL "  required />
									</div>
								</div>
								
								<div class="col-12">
									<div class="single-input">
										<h5> SEBAB PERMOHONAN</h5>
										<input type="text" name="sebab" placeholder="SEBAB PERMOHONAN"  required />
									</div>
								</div>
								<div class="col-12">
									<div class="submit-input text-center">
										<input type="submit" name="tempahan" value="MOHON">
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