<?php
	if(isset($_SESSION['user_id']) && isset($_SESSION['privilege']))
	{
		//When normal user loged in
		if($_SESSION['privilege'] == 1)
		{
			if(!in_array(basename($_SERVER['REQUEST_URI']), $normal_user))
			{
				header('location: user_login.php');
			}
		}
		//When admin user loged in
		else if($_SESSION['privilege'] == 2)
		{
			if(strpos(basename($_SERVER['REQUEST_URI']), '?'))
			{
				$url= strtok(basename($_SERVER["REQUEST_URI"]),'?');
				if(!in_array($url, $admin))
				{
					header('location: user_login.php');
				}
			}
			else if(!in_array(basename($_SERVER['REQUEST_URI']), $admin))
			{
				header('location: user_login.php');
			}
		}
	}
	else
	{
		header('location: user_login.php');
	}
?>