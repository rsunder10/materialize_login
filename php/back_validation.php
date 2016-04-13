<?php
require_once('dbconnect.php');
require_once('validate.php');
session_start();
$vl=new Validate();
$db=new Database(); 

if(isset($_POST['username'])&&isset($_POST['first'])&&isset($_POST['last'])&&isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['mobile']))
{
extract($_POST);
$username=$vl->test_input($username);
$first=$vl->test_input($first);
$last=$vl->test_input($last);
$email=$vl->test_input($email);
$password=$vl->test_input($password);
$mobile=$vl->test_input($mobile);

$query = sprintf("SELECT id	FROM signup WHERE username = '%s' 
		LIMIT 1;", $db->escape_string($username));
		if(@$result = $db->db_num($query)){
		if($result>0){
			die('username already Exists');
		}
		}

if(@$vl->valid_password($password)&& $vl->text($first) && $vl->valid_email($email)&& $vl->valid_username_name($username)&&$vl->text($last))
{

$password=md5($password);
$query=sprintf("INSERT INTO `signup` (`username`,`password`, `first`, `last`, `email`, `mobile`) VALUES ('%s', '%s', '%s', '%s', '%s', '%s');",$db->escape_string($username),$db->escape_string($password),$db->escape_string($first),$db->escape_string($last),$db->escape_string($email),$db->escape_string($mobile));
if($result=$db->insert_data($query)){
	$_SESSION['signedin']='signedin';
$query2=sprintf("SELECT * FROM `signup` where username='%s'",$db->escape_string($username));
if(@$result=$db->select_data($query2)){
	$row=$result->fetch_assoc();
	$_SESSION['id']=$row['id'];

	header('Location:../user.php');
}
else{
	die('Mc Server');
}
    

}
}
else{
	die('Some Problem Occured in Server');
}

}
else{
	die('Some Problem Occured in Server');
}

?>
