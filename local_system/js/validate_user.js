// Validate data entered by user in registration form
function form_validation()
{
	var first_name = document.registration.first_name.value;  
	var last_name = document.registration.last_name.value;  
	var email_id = document.registration.email_id.value;  
	var user_name = document.registration.user_name.value;  
	var password = document.registration.password.value;
	var confirm_password = document.registration.confirm_password.value; 
	var address_line1 = document.registration.address_line1.value;  
	var city = document.registration.city.value;   
	var zip_code = document.registration.zip_code.value;  
	var state = document.registration.state.value;
	var country = document.registration.country.value;      
	if (first_name == "" || last_name == "" || email_id == "" || user_name == "" || password == "" || address_line1 == "" || city == "" || zip_code == "" || state == "" || country == "")
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
			document.registration.first_name.focus();  
			return false;  
		}
		if (! last_name.match(letters))  
		{  
			alert("Last name must contain alphabet characters only");  
			document.registration.last_name.focus();  
			return false;  
		}
		if (! city.match(letters))  
		{  
			alert("Invalid city name");
			document.registration.city.focus();  
			return false;  
		}
		if (! state.match(letters))  
		{  
			alert("Invalid state name");
			document.registration.state.focus();  
			return false;  
		}
		if (! country.match(letters))  
		{  
			alert("Invalid country name");
			document.registration.country.focus();  
			return false;  
		}        
		var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
		if( ! email_id.match(mailformat))  
		{  
			alert("You have entered an invalid email address!");  
			document.registration.email_id.focus();  
			return false;  
		}
		if (password.length < 6) 
		{
		  	alert('Please enter at least 6 characters in password');  
			document.registration.password.focus(); 
		  	return false;
		}
 		if (confirm_password != password)
 		{
 			alert('Your password not match');  
			document.registration.confirm_password.focus(); 
  			return false;
 		}  
		var numbers = /^\d{6}$/;  
		if(! zip_code.match(numbers))  
		{
			alert('You have entered an invalid zip code!');  
			document.registration.zip_code.focus();  
			return false;     
		}
		
	}
	return true;
}
