<?php
class Validate{

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function valid_email($email)
{
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false; 
    }
    return true;

}


function valid_password($pass,$minlength = 6, $maxlength = 40)
{
    $pass = trim($pass);
 
    if (empty($pass))
    {
        return false;
    }
 
    if (strlen($pass) < $minlength)
    {
        return false;
    }
 
    if (strlen($pass) > $maxlength)
    {
        return false;
    }


	return true;
}



function valid_username_name($name,$minlength = 4, $maxlength = 40)
{
    $name = trim($name);
 
    if (empty($name))
    {
        return false;
    }
 
    if (strlen($name) < $minlength)
    {
        return false;
    }
 
    if (strlen($name) > $maxlength)
    {
        return false;
    }

	return true;
}

function text($text, $minlength =1, $maxlength = 40)
{
 
    $text = trim($text);
 
    if (empty($text))
    {
        return false; 
    }
    if (strlen($text) > $maxlength)
    {
        return false; 
    }
    if (strlen($text) < $minlength)
    {
 
        return false; 
    }
 	

 return true;
}

}




?>