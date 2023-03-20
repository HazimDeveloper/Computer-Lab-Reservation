<?php 
include('config.php'); 

if(isset($_POST['reg_admin'])){ 
	
	//3
	$firstname= $_POST['firstname'];
	$lastname= $_POST['lastname'];
	$email= $_POST['email'];
	$password = md5($_POST['password']) ;
	$confirmpassword=md5($_POST['confirmpassword']) ;
	

	$select_admin = mysqli_query($db,"SELECT * FROM daftaradmin WHERE firstname = '$firstname' AND email = '$email'");

	if(mysqli_num_rows($select_admin)  > 0 ){
		{
					function function_alert($message){
					  
					// Display the alert box 
					echo "<script>alert('$message');</script>";
				   }
		  
		  
					// Function call
					function_alert("MAKLUMAT DIISI SUDAH DIDAFTAR. SILA PERIKSA SEMULA");
					
				}
	}else{
		if($password == $connfirmpassword){

			$select_user = mysqli_query($db,"INSERT INTO daftaradmin(firstname,lastname,email,password,confirmpassword) VALUES ('$firstname','$lastname','$email','$password','$confirmpassword')");
		
			header("location: login.html");
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
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Daftar Admin</title>
	  <link href="pwnlogo.png" rel="icon">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <img src="pwnpicture.jpg" class="col-lg-6 d-none d-lg-block">
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Admin - Unit Teknologi Maklumat</h1>
                            </div>
                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="firstname" value=""
                                            placeholder="Siti">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="lastname" value=""
                                            placeholder="Aminah">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name="email" value=""
                                        placeholder="siti@selangor.gov.my">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            name="password" value="" placeholder="......">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            name="confirmpassword" value="" placeholder="......">
                                    </div>
                                </div>
                                <a href="login.html" type="submit" name="reg_admin" class="btn btn-primary btn-user btn-block">
                                   Daftar
                                </a>   
                            </form>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Lupa Kata Laluan</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Laman log masuk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>