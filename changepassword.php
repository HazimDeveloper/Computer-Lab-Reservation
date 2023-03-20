<?php
	session_start();
 
	include('config.php');  
	if(isset($_POST['update'])){
		//get POST data
		$pass = $_POST['katalaluan'];
		$cnfirm = $_POST['sahkankatalaluan'];
		$retype = $_POST['retype'];
 
		//create a session for the data incase error occurs
		$_SESSION['katalaluan'] = $pass;
		$_SESSION['sahkankatalaluan'] = $cnfirm;
		$_SESSION['retype'] = $retype;
 
		//connection
		$conn = new mysqli('localhost', 'root', '', 'dbase');
 
		//get user details
	    $select_user = mysqli_query($db,'SELECT * FROM tempahan WHERE user_id = '.$user_id.'');
		$row = mysqli_fetch_assoc($select_user);
 
		//check if old password is correct
		if(password_verify($katalaluan, $sahkatalaluan['katalaluan'])){
			//check if new password match retype
			if($cnfirm == $retype){
				//hash our password
				$katalaluan = password_hash($sahkankatalaluan, PASSWORD_DEFAULT);
 
				//update the new password
				$select_user = "UPDATE users SET password = '$katalaluan' WHERE user_id = '".$_SESSION['user_id']."'";
				if($conn->query($sql)){
					$_SESSION['success'] = "Password updated successfully";
					//unset our session since no error occured
					unset($_SESSION['katalaluan']);
					unset($_SESSION['sahkankatalaluan']);
					unset($_SESSION['retype']);
				}
				else{
					$_SESSION['error'] = $conn->error;
				}
			}
			else{
				$_SESSION['error'] = "New and retype password did not match";
			}
		}
		else{
			$_SESSION['error'] = "Incorrect Old Password";
		}
	}
	else{
		$_SESSION['error'] = "Input needed data to update first";
	}
 
	header('location: index.html');
 
?> 