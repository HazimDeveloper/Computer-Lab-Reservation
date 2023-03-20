<?php
session_start();

// initializing variables
$nama = "";
$emel   = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'dbcomputerlab');

// daftar pengguna
if (isset($_POST['reg_user'])) {
  // terima maklumat daripada form
  $nama = mysqli_real_escape_string($db, $_POST['nama']);
  $emel = mysqli_real_escape_string($db, $_POST['emel']);
  $bahagian=mysqli_real_escape_string($db, $_POST['bahagian']);
  $unit=mysqli_real_escape_string($db, $_POST['unit']);
  $nombortelefon=mysqli_real_escape_string($db, $_POST['nombortelefon']);
  $katalaluan = mysqli_real_escape_string($db, $_POST['katalaluan']);
  $sahkankatalaluan = mysqli_real_escape_string($db, $_POST['sahkankatalaluan']);

  // if terlupa isi nama, dia akan noticekan kita
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($nama)) { 
    array_push($errors, "Masukkan nama pengguna"); 
  }
  if (empty($emel)) { 
    array_push($errors, "Masukkan emel"); 
  }
  if (empty ($bahagian)) {array_push ($errors, "Nyatakan bahagian");}
  if (empty ($unit)) {array_push ($errors, "Nyatakan unit");}
  if (empty ($nombortelefon)) {array_push ($errors, "Nyatakan nombor telefon persendirian");}
  if (empty($katalaluan)) { array_push($errors, "Masukkan kata laluan"); }
  if ($katalaluan!= $sahkankatalaluan) {
	array_push($errors, "Kata Laluan tidak sama");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$nama' OR emel='$eell' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // make sure nama emel tak sama
    if ($user['nama'] === $nama) {
      array_push($errors, "Nama sudah wujud");
    }

    if ($user['emel'] === $emel) {
      array_push($errors, "emel sudah wujud");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($katalaluan);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (nama, emel, katalaluan) 
  			  VALUES('$nama', '$emel', '$katalaluan')";
  	mysqli_query($db, $query);
  	$_SESSION['nama'] = $nama;
  	$_SESSION['berjaya'] = "Anda berjaya log masuk";
  	header('location: index.php');
  }
}

//..

// ... 

// Log Masuk Pengguna
if (isset($_POST['Log Masuk Pengguna'])) {
  $username = mysqli_real_escape_string($db, $_POST['nama pengguna']);
  $password = mysqli_real_escape_string($db, $_POST['kata laluan']);

  if (empty($nama)) {
  	array_push($errors, "Masukkan Nama Pengguna");
  }
  if (empty($password)) {
  	array_push($errors, "Masukkan Katalaluan");
  }

  if (count($errors) == 0) {
  	$password = md5($katalaluan);
  	$query = "SELECT * FROM users WHERE username='$nama' AND password='$katalaluan'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['nama pengguna'] = $nama;
  	  $_SESSION['berjaya'] = "Log Masuk";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Kata laluan tidak sama");
  	}
  }
}

?>
