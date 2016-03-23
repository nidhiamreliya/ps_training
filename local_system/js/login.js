function login_check()
{
	var user_name = document.login_form.user_name.value;  
	var password = document.login_form.password.value;
	if(user_name == "")
	{
		alert ( "Please enter user name." );
		return false;
	}
	else if(password == "")
	{
		alert ( "Please enter password." );
		return false;
	}
}