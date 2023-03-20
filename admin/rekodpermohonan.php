
<?php 

session_start();
include ('config.php');

$select_user = mysqli_query($db,"SELECT * FROM daftar JOIN tempahan ON daftar.user_id = tempahan.user_id ");

if(isset($_POST['submit'])){

$status = $_POST['status'];
$tempahanId = $_POST['tempahanId'];
echo "<script>alert('$tempahanId')</script>";
$update_status = mysqli_query($db,"UPDATE tempahan SET status = '$status' WHERE tempahanId = '$tempahanId'");	
if($update_status){
	header('location: rekodpermohonan.php');
}else{
	echo "sql error";
}
}
	
?>

<?php 
$select_noti = mysqli_query($db,"SELECT * FROM tempahan ORDER BY tempahanId DESC LIMIT 5");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rekod Permohonan - Admin</title>
	  <link href="pwnlogo.png" rel="icon">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
	<!-- <link rel="stylesheet" href="css/file.css"> -->
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
  <style>
									.button {
									  position: fixed;
									  left: 130000px;
									  top: 500px;
									  border: none;
									  font-size: 12px;
									  color: #858796;
									  outline-color: #858796;
									  padding: 20px;
									  width: 200px;
									  text-align: center;
									  transition-duration: 0.4s;
									  text-decoration: none;
									  overflow: hidden;
									  cursor: pointer;
									}

									.button:after {
									  content: "";
									  background: #f1f1f1;
									  display: block;
									  position: absolute;
									  padding-top: 300%;
									  padding-left: 350%;
									  margin-left: -20px !important;
									  margin-top: -120%;
									  opacity: 0;
									  transition: all 0.8s
									}

									.button:active:after {
									  padding: 0;
									  margin: 0;
									  opacity: 1;
									  transition: 0s
									}
									</style>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fa fa-desktop" aria-hidden="true"></i>
                </div>
                <div class="sidebar-brand-text mx-3">STMK</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fa fa-user"></i>
                    <span>Welcome, Admin!</span></a>
            </li>

           <!-- Divider -->
            <hr class="sidebar-divider">

           
            <!-- Nav Item - Pages Collapse Menu -->
           <li class="nav-item">
                <a class="nav-link collapsed" href="rekodpermohonan.php" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Rekod Permohonan</span>
                </a>
            </li>

           
            <!-- Nav Item - Charts -->
			  <li class="nav-item">
                <a class="nav-link collapsed" href="profiladmin.php" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                   <i class="fa fa-id-badge" aria-hidden="true"></i>
                     <span>Profil Admin</span>
                </a>
              </li>


           
           
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <span class="badge rounded-pill badge-notification bg-danger"><?php echo mysqli_num_rows($select_noti) ?></span>
                            <!-- Counter - Alerts -->
                                
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                
                                <?php while ($noti = mysqli_fetch_assoc($select_noti)) { ?>
                                <a class="dropdown-item d-flex align-items-center" href="rekodpermohonan.php">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <!-- <i class="fas fa-file-alt text-white"></i> -->
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">Date Start : <?= $noti['dateStart'] ?></div>
                                        <span class="font-weight-bold">Nama : <?= $noti['nama'] ?></span><br>
                                        <span class="font-weight-bold">Reason : <?= $noti['sebab'] ?></span>
                                    </div>
                                </a>
<?php  } ?>
                                <!-- <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a> -->

                                <!-- <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a> -->
                                <!-- <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a> -->
                            </div>
                        </li>

                            

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages 
                                <span class="badge badge-danger badge-counter">7</span> -->
                            </a>
                            
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Nurfazila</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid"> </div>
  
                <!-- REKOD IN FILE -->
				
						  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
						  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
						

						<div class="container">
						  <h2>Senarai dan Butiran Permohonan</h2>
						 
						  <input class="form-control" id="myInput" type="text" placeholder="Cari..">
						  <br>
						  <table class="table table-bordered table-striped table-id" id="table-id">
							<thead>
							  <tr>
								<th>Nama Penuh</th>  
								<th>Tarikh Permohonan Bermula</th>
								<th>Tarikh Permohonan Berakhir</th>
								<th>Status</th>
								<th>Action</th>
							  </tr>
							</thead>
							
							<tbody id="myTable">
							
                                <?php
                            
                            while($row = mysqli_fetch_assoc($select_user)){
								
                                ?>
                                <form action= "" method="post">
							  <tr>
								<td><?= $row['nama'] ?></td>
								<td><?= $row['dateStart'] ?></td>
								<td><?= $row['dateStop'] ?></td>
								<td>
									
									 <input type="hidden" name="tempahanId" id="tempahanId" value="<?= $row['tempahanId'] ?>">
									   <select class="form-select mt-3 btn btn-secondary" name="status" id="status">
									   <?php if($row['status'] != ""){  ?>
									   

                                        <option value="<?= $row['status'] ?>" selected ><?= $row['status'] ?></option>
                                    <?php } elseif($row['status'] == ""){ ?>
                                              
                                                       
                                       <option value=""  selected >Choose the status</option>
                                       
	 <option value="Approve">Approve</option>
     <option value="Reject">Reject</option>
     <option value="Cancel">Cancel Reservation</option>                    
                                                                          <?php }?>
    
   </select> 
</td>
<td><input type="submit" value="submit" class="btn btn-success" id="submit" name="submit"></td>
</form>	 
								<!-- <td>  <button name="submit" class="btn btn-success" type="submit">submit</button></td> -->
						
							</tr>
					<?php } ?>
							 
							</tbody>
						  </table>
						  
									<!--print button-->
							<div>
							<button onclick="window.print()" class="btn btn-dark text-light">Print this page</button>
							<button onclick="exportToExcel()" class="btn btn-dark text-light">Convert To Excel</button>
							</div>
						</div>

						<script>
						$(document).ready(function(){
						  $("#myInput").on("keyup", function() {
							var value = $(this).val().toLowerCase();
							$("#myTable tr").filter(function() {
							  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
							});
						  });
						});
						</script>
				<!-- End Folders Container -->
    
			  </div>
			  
			</div>
			</br>
		
			<!-- Scroll to Top Button-->
			<a class="scroll-to-top rounded" href="#page-top">
				<i class="fas fa-angle-up"></i>
			</a>

			<!-- Logout Modal-->
			<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
				aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
							<button class="close" type="button" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
						<div class="modal-footer">
							<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
							<a class="btn btn-primary" href="login.html">Logout</a>
						</div>
					</div>
				</div>
			</div>

			<!-- Bootstrap core JavaScript-->
			<script src="vendor/jquery/jquery.min.js"></script>
			<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.1/xlsx.full.min.js"></script>


            <script>
                function exportToExcel() {
  // Get the HTML table
  var table = document.getElementById("table-id");

  // Create a new Workbook object
  var wb = XLSX.utils.table_to_book(table);

  // Generate the Excel file
  XLSX.writeFile(wb, "table.xlsx");
}

            </script>
			<!-- Core plugin JavaScript-->
			<!-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->

			<!-- Custom scripts for all pages-->
			<!-- <script src="js/sb-admin-2.min.js"></script>
			<script>

                var status = document.getElementById("status").value
                var tempahanId = document.getElementById("tempahanId").value

                $("#submit").on('click',function(){
                    $.ajax({
                    type: "POST",
                    url: "update_status.php",
                    data: {
                        tempahanId : tempahanId,
                        status : status
                    },
                    dataType: "text",
                    success: function (response) {
                        alert(response)
                    }
                });
                })
              
            </script> -->
			<!--js fie rekod-->
			<!-- <script src="file.js"></script> -->

</body>

</html>