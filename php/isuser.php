<?php

require_once('dbconnect.php');
require_once('validate.php');
$db=new Database();
$vl=new Validate();
if(isset($_POST['username'])&&isset($_POST['password'])){

	extract($_POST);
	$username=$vl->test_input($username);
	$password=$vl->test_input($password);
			 $query = sprintf("
		SELECT * 
		FROM signup 
		WHERE username = '%s' AND password = '%s'
		 LIMIT 1;", $db->escape_string($username), $db->escape_string(md5($password)));


if(@$result=$db->select_data($query))
{	

if($result->num_rows>0){

$row=$result->fetch_assoc();
$_SESSION['id']=$row['id'];
$_SESSION['signedin']='match';
header('Location:user.php');
}

else{
	$_SESSION['error']='Mismatch';
}

}

}

?>