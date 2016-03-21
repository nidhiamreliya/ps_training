
<?php
	//This is for check errors in submitting form.
	include('includes/session.php');
	if (isset($_SESSION['error']) && count($_SESSION['error']) > 0)
	{
		$error_message = implode('<br/> ', $_SESSION['error']);
		unset($_SESSION['error']);	
	}
	if (isset($_SESSION['data']))
	{
		$post_data = $_SESSION['data'];
		unset($_SESSION['data']);	
	}
	if (isset($_SESSION['success_msg']))
  	{
  		$success_msg = $_SESSION['success_msg'];
  		unset($_SESSION['success_msg']);
  	}
	//This includes header of the page
	include('includes/header.php');
?>
	<!-- Include javascript file -->
  	<script type="text/javascript" src="js/login.js"></script>
	<!-- Main body of the page -->
	<div class="container-fluid">
		<div class="col-md-6 col-md-offset-3">	
			<!-- Page header -->
			<div class="form_head text-center">
				<h1>User Login</h1>
			</div>	
			<!--  Login form -->		
			<form class="form-horizontal reg_form" method="post" action="controllers/user_login.php" name="login_form" onsubmit="return login_check()">
  				<div class="form-group">
   					<?php
	  					if(isset($success_msg)) 
                		{
                   			echo  '<label class="col-md-11 text-success text-center">' . $success_msg . '</label>';
                		}
					?>
   					</label>
  				</div>
  				<div class="form-group">
   					<label for="user_name" class="col-md-4 control-label">User name:</label>
   					<div class="col-md-8">
    					<input type="text" class="form-control" id="user_name" name="user_name" placeholder="Enter your user name or email" value="<?=isset($post_data)?$post_data : '' ?>">
    				</div>
  				</div>
  				<div class="form-group">
   					<label for="password" class="col-md-4 control-label">Password:</label>
   					<div class="col-md-8">
    					<input type="password" class="form-control" id="password" name="password" placeholder="Password" >
    				</div>
  				</div>
  				<div>
  					<label for="errors" class="col-md-8  col-md-offset-4 has-error">
	  				<?php
	  					if (isset($error_message))
						{
							echo '<font color=red>' . $error_message . '</font>';
						}
					?>
					</label>
				</div>
  				<div class="form-group ">
  					<div class="col-md-3 col-md-offset-3">
  						<button type="submit" class="col-md-4 btn btn-block btn-success btn_submit text-right">Login</button>
  					</div>
  					<div class="col-md-3">
            			<button type="button" class="btn btn-block btn-success btn_submit" onclick="location.href = 'registration.php';">Registration</button>
  					</div>
  				</div>
			</form>
		</div>
	</div>

<?php
	//This includes footer of the page
	include('includes/footer.php');
?>

