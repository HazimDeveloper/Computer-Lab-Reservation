<?php 
include('config.php'); //1
session_start();
if(isset($_POST['reg_user'])){ //2
	
	//3
	$nama = $_POST['nama'];
	$nopejabat = $_POST['nopejabat'];
	$email = $_POST['emel'];
	$bahagian = $_POST['bahagian'];
	$unit = $_POST['unit'];
	$fon = $_POST['nombortelefon'];
	$pass = md5($_POST['katalaluan']) ;
	$cnfirm =md5($_POST['sahkankatalaluan']) ;
	

	$select_user = mysqli_query($db,"SELECT * FROM daftar WHERE nama = '$nama' AND emel = '$email'");

	if(mysqli_num_rows($select_user)  > 0 ){
		{
					function function_alert($message){
					  
					// Display the alert box 
					echo "<script>alert('$message');</script>";
				   }
		  
		  
					// Function call
					function_alert("MAKLUMAT DIISI SUDAH DIDAFTAR. SILA PERIKSA SEMULA");
					
				}
	}else{
		if($pass == $cnfirm){

			$select_user = mysqli_query($db,"INSERT INTO daftar(no_pejabat,nama,emel,bahagian,unit,phoneNum,kataLaluan) VALUES ('$nopejabat', '$nama','$email','$bahagian','$unit','$fon','$pass')");
		
			header("location: login.php");
		 }else{
					function function_alert($message){
					  
					// Display the alert box 
					echo "<script>alert('$message');</script>";
				   }
		  
		  
					// Function call
					function_alert("SILA PERIKSA KATALALUAN ANDA SEBELUM MENDAFTAR");
					
				}
			}
		}

?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Pemohon- STMK</title>
  <link href="pwnlogo.png" rel="icon">
  <link rel="stylesheet" href="css/daftar.css">
</head>
<body>
	
  <form method="post" action="">
  <div class="container">
  <div class="title">Daftar Akaun</div>
  <form action="" method="post">
    <div class="user-details">
    
      <div class="input-box">
        <span class="details"><br>Nama Pemohon</span>
        <input type="text" name="nama" value=""  placeholder="Nama Penuh" required />
      </div>
      <div class="input-box">
        <span class="details"><br>No Pejabat</span>
        <input type="text" name="nopejabat" value=""  placeholder="No Pejabat" required />
      </div>
      <div class="input-box">
        <span class="details">Nombor Telefon</span>
        <input type="tel" name="nombortelefon" value="" placeholder="012XXXXXXX" required />
      </div>
      <div class="input-box">
        <span class="details">Emel Rasmi</span>
        <input type="email" name="emel" value="" placeholder="nama@selangor.gov.my" required />
      </div>
      <div class="input-box">
        <span class="details">Bahagian</span>
        <input type="text" name="bahagian" value="" placeholder="Bahagian Khidmat Pengurusan" required />
      </div>
      <div class="input-box">
        <span class="details">Unit</span>
        <input type="text" name="unit" value="" placeholder="Teknologi Maklumat" required />
      </div>
       <div class="input-box">
        <span class="details">Kata Laluan</span>
        <input type="text" name="katalaluan" value="" placeholder="......" required />
      </div>
     
      <div class="input-box">
        <span class="details">Sahkan Kata Laluan</span>
        <input type="text" name="sahkankatalaluan" id="" placeholder="......." required />
      </div>
    </div>

  

    <div class="button">
      <input type="submit" name= "reg_user" value="Daftar" />
    </div>
  </form>
  <div class="forget-password">
  Sudah mendaftar ?   <a href="daftar.php"> Login sekarang</a>
               
            </div>
</div>
</body>
</html>

