<?php
  	include('includes/session.php');
  	include('config/globals.php');
  	//check authenticatin
  	include('controllers/check_authentication.php');
  	//To retrive data form registration or login
  	if(isset($_SESSION['message']))
  	{
  		$message = $_SESSION['message'];
  		unset($_SESSION['message']);
  	}
	//This includes header of the page
	include('includes/header.php');		
?>
	<!-- Main body of the page -->
	<div class="container-fluid">
		<div class="row">	
			<!-- page header -->
			<div class="form_head text-center">
		      	<div class="col-md-4 col-md-offset-1">
					<h1>Welcome Admin</h1>
				</div>
				<div class="col-md-3 col-md-offset-3 text-right">
					<ul class="nav nav-pills">
  						<li role="presentation"><a value="Log out" class="btn-success btn_head" name="logout" href="controllers/log_out.php">Log out</a></li>
  						<li class="presentation"><a value="My Profile" class="btn-success btn_head"  name="myprofile" href="user_profile.php">My Profile</a></li>
					</ul>				
				</div>
		    </div> 
		</div>
		<!-- page body -->
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
			<?php
			$user_data = get_rows("SELECT user_id, privilege, first_name, last_name, user_name, email_id, address_line1, address_line2, city, zip_code, state, country FROM user_data");
			if($user_data == null)
			{
			?>
				<div class="text-center text-info">
					<span> Sorry you don't have any user data to display.</span>
				</div>
			<?php
			}
			else
			{
			?>
				<!-- Table header -->
				<table class="table-striped col-md-12 table-bordered table-responsive">
					<tr>
						<th>First name</th>
						<th>Last name</th>
						<th>User name</th>
						<th>Email id</th>
						<th colspan=2>Address</th>
						<th>City</th>
						<th>Zip code</th>
						<th>State</th>
						<th>Country</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
				<!-- Table data -->
				<?php
				foreach ($user_data as $row)
				{
					if($row['privilege'] != 2)
					{	
				?>
						<tr>
							<td> <?php echo $row['first_name'] ?> </td>
							<td> <?php echo $row['last_name'] ?> </td>
							<td> <?php echo $row['user_name'] ?> </td>
							<td> <?php echo $row['email_id'] ?> </td>
							<td> <?php echo $row['address_line1'] ?> </td>
							<td> <?php echo $row['address_line2'] ?> </td>
							<td> <?php echo $row['city'] ?> </td>
							<td> <?php echo$row['zip_code'] ?> </td>
							<td> <?php echo $row['state'] ?> </td>
							<td> <?php echo $row['country'] ?> </td>
							<td> <a href=\'user_profile.php?id=<?php echo $row['user_id'] ?>'>Edit</a></td>
							<td> <a onclick="return confirm(\'Are you Sure you want to delete \'<?php echo $row['first_name'] ?> \'!);" href='controllers/delete_user.php?id=<?php echo $row['user_id'] ?>' >Delete</a></td>
						</tr>
				<?php		
					}
				}
				echo '</table>';
			}
			?>
			</div>
		</div>
		<!-- Print messge on successful delete data. -->  
		<div class="row">
			<span class="col-md-4 col-md-offset-4 text-center alert-success" >
				<?php
					if(isset($message))
					{
						echo '<strong>' . $message . '</strong>';
					}
				?>
			</span>
		</div>
	</div>
<?php
	//This includes footer of the page
	include('includes/footer.php');
?>
