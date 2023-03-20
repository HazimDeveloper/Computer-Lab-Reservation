<?php 
include('config.php'); //1

if(isset($_POST['change_pass'])){
$email = $_POST['email'];
$pass = md5($_POST['pass']);
$cnfrm_pass =  md5($_POST['cnfrm_pass']);

$query_user = mysqli_query($db,"SELECT * FROM daftar WHERE emel = '$email'");
$data_user = mysqli_fetch_assoc($query_user);
$id_user = $data_user['user_id'];
if($query_user != 0 ){

if($pass == $cnfrm_pass){

mysqli_query($db, "UPDATE daftar SET kataLaluan = '$pass' WHERE user_id = '$id_user'");
header("Location: index.php");
}else{
echo "<script>alert('pass dan confirm password anda tidak sama')</script>";
}
}else{
echo "<script>alert('email anda tidak ada didalam data ')</script>";

}
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Kemaskini Katalaluan - STMK</title>
  <link href="pwnlogo.png" rel="icon">
  <link rel="stylesheet" href="css/daftar.css">
</head>
<body>
	
  <form method="post" action="">
  <div class="container">
  <div class="title">Lupa Kata Laluan</div>
	<div class="user-details">
      <div class="input-box">
        <span class="details"><br>Emel Rasmi Pemohon</br></span>
        <input type="email" name="email"   placeholder="" required />
      </div>
  	<div class="user-details">
      <div class="input-box">
        <span class="details"><br>Katalaluan Baru</br></span>
        <input type="password" name="pass"  placeholder="" required />
      </div>
	<div class="user-details">
		<div class="input-box">
  	  <span class="detail">Sah Katalaluan</br></span>
  	  <input type="password" name="cnfrm_pass" placeholder="" required >
  	</div>
  	
	<div class="button">
  	 <input type="submit" name="change_pass" value="Kemaskini" />
  	</div>
	 <a href="logmasuk.php">Kembali ke log masuk</a>
	
</body>
</html>