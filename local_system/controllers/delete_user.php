<?php
	include('../includes/session.php');
	include('../config/database.php');
	include('../config/globals.php');
	//check autentication 
	include('check_authentication.php');
	//Delete user as requested by admin
	if($_SESSION['privilege'] == 2)
	{
		if($_GET['id'] == "" || $_GET['id'] <= 2)
		{
			$_SESSION['message'] = "Sorry you entered invalid argument."; 
			header('location: ../admin_panel.php');
		}
		else 
		{
			$result = execute_query("DELETE FROM user_data where user_id= ?", array($_GET['id']));
			$_SESSION['message'] = "Record has been successfully deleted."; 
		}
	}
	header('location: ../admin_panel.php');
?>