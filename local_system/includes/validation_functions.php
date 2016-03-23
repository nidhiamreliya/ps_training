<?php
function check_empty($values)
{
	return empty($values);
}
function check_names($names)
{
	return preg_match("/^[a-zA-Z'-]+$/", $names);
}
function check_email($email)
{
	return preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $email);
}
function check_zipcode($zip_code)
{
	return preg_match("/^\d{6}$/", $zip_code);
}
?>