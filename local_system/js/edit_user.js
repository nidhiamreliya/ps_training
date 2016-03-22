// Validate data entered by user in edit profile form
function edit_user()
{
	var first_name = document.edit_profile.first_name.value;  
	var last_name = document.edit_profile.last_name.value;  
	var email_id = document.edit_profile.email_id.value;  
	var user_name = document.edit_profile.user_name.value;  
	var password = document.edit_profile.password.value;
	var confirm_password = document.edit_profile.confirm_password.value; 
	var address_line1 = document.edit_profile.address_line1.value;  
	var city = document.edit_profile.city.value;   
	var zip_code = document.edit_profile.zip_code.value;  
	var state = document.edit_profile.state.value;
	var country = document.edit_profile.country.value;      
	if (first_name == "" || last_name == "" || email_id == "" || user_name == "" || address_line1 == "" || city == "" || zip_code == "" || state == "" || country == "")
	{
		alert ( "There are some empty fiels. Please fill all required fields." );
		return false;
	}
	else
	{
		var letters = /^[A-Za-z]+$/;  
		if (! first_name.match(letters))  
		{  
			alert("First name must contain alphabet characters only");
			document.edit_profile.first_name.focus();
			return false;  
		}
		if (! last_name.match(letters))  
		{  
			alert("Last name must contain alphabet characters only");  
			document.edit_profile.last_name.focus(); 
			return false;  
		}
		if (! state.match(letters))  
		{  
			alert("Invalid state name");
			document.edit_profile.state.focus();  
			return false;  
		}
		if (! country.match(letters))  
		{  
			alert("Invalid country name");
			document.edit_profile.country.focus();  
			return false;  
		}    
		var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
		if( ! email_id.match(mailformat))  
		{  
			alert("You have entered an invalid email address!");  
			document.edit_profile.email_id.focus();
			return false;  
		}
		if(password != "")
		{
			if (password.length < 6) 
			{
		  		alert('Please enter at least 6 characters in password');  
		  		document.edit_profile.password.focus();
		  		return false;
			}
 			if (confirm_password != password)
 			{
 				alert('Your password not match'); 
 				document.edit_profile.confirm_password.focus(); 
  				return false;
 			}
 		}  
		var numbers = /^\d{6}$/;  
		if(! zip_code.match(numbers))  
		{
			alert('You have entered an invalid zip code!'); 
			document.edit_profile.zip_code.focus(); 
			return false;     
		} 
		if (! city.match(letters))  
		{  
			alert("Invalid city name");
			document.edit_profile.city.focus();
			return false;  
		} 
	}
	return true;
}
