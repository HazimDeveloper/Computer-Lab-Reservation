<?php
session_start();
?>

<?php
include('config.php');
	function function_alert($message){
				
	 echo "<script>alert('$message');</script>";
		   }

		if(isset($_POST['login_user'])){
		  
		  $nama = $_POST['nama'];
		  $pass = md5($_POST['sahkankatalaluan']); 
		  $select_user = mysqli_query($db,"SELECT * FROM daftar WHERE nama = '$nama' AND kataLaluan = '$pass'");

		  if(mysqli_num_rows($select_user) > 0 ){
			if ($row = mysqli_fetch_assoc($select_user)){
			  $_SESSION['user_id'] = $row['user_id'] ;
			  header("location:tempahan.php");
			  {
		
					// Function call
					function_alert("LOG MASUK BERJAYA");
					
				}
		  }else{
				

					function_alert("SILA PERIKSA KATALALUAN ANDA SEBELUM LOG MASUK");
					
				}
			}
		}
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	   <title>Log Masuk Pengguna - STMK</title>
	  <link rel="stylesheet" href="css/login.css">
	  <link href="pwnlogo.png" rel="icon">
</head>  

	<div class="parent clearfix">
    <div class="bg-illustration">
      <img src="gambarkomputer.jpg" alt="background">

    

    </div>
    
    <div class="login">
      <div class="container">
        <h1>Selamat Datang!<br />Sistem Tempahan Makmal Komputer</h1>
    
        <div class="login-form">
          <form name="select_user" method="POST" action="">
            <input name= "nama" type="text" placeholder="Nama Penuh">
            <input name = "sahkankatalaluan" type="password" placeholder="Kata Laluan">

            <div class="forget-password">
              <a href="daftar.php">Belum mendaftar ? Daftar sekarang</a>
               
            </div>
            <br><div class="forget-pass">
              <a href="tukarpassword.php">Lupa Kata Laluan</a>
            </br></div>
		

            <button name="login_user" type="submit">LOG MASUK</button>

          </form>
        </div>
    
      </div>
      </div>
  </div>

</body>

</html>
