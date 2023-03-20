<?php
session_start();
?>

<?php
include('config.php');
	function function_alert($message){
				
	 echo "<script>alert('$message');</script>";
		   }
			
		if(isset($_POST['login_admin'])){
			
			$username = $_POST['username'];
            $password= $_POST['password'];   
			$select_admin = mysqli_query($db,"SELECT * FROM adminlogin WHERE username = '$username' AND password = '$password'");
			
		    if(mysqli_num_rows($select_admin) > 0){
				if ($row = mysqli_fetch_assoc($select_admin));{
					$_SESSION['username'] = $row['username'];

					// Function call
						function_alert("LOG MASUK BERJAYA");				
				header("location:menu.php");
					
				
						
					
		
		}}else{
				

					function_alert("SILA PERIKSA KATALALUAN ANDA SEBELUM LOG MASUK");
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

    <title>Log Masuk - Admin</title>
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

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <img src="pwnpicture.jpg" class="col-lg-6 d-none d-lg-block">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Selamat Datang!</h1>
                                    </div>
                                    <form class="user" action="" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                for="username" name="username" 
                                                placeholder="Nama Penuh">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                for="password" name="password" placeholder=".....">
                                        </div>
											<div class="form-group">
                          
										<input type="submit" name="login_admin" class="btn btn-primary btn-user btn-block" value="Log Masuk">
										<br><a href="index.php">Laman Utama</a></br>
									</form>
                                </div>
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