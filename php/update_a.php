<?php
session_start();
require_once('dbconnect.php');
require_once('validate.php');
$db=new Database();
$vl=new Validate();
if(isset($_POST['first'])&&isset($_POST['last'])&&isset($_POST['mobile']))
{
extract($_POST);
$first=$vl->test_input($first);
$last=$vl->test_input($last);
$mobile=$vl->test_input($mobile);



$query=sprintf("UPDATE `signup` SET  `first`='%s', `last`='%s',  `mobile`='%s' WHERE id =%d; ",$db->escape_string($first),$db->escape_string($last),$db->escape_string($mobile),$db->escape_string($_SESSION['id']));

if(@$result=$db->update_data($query)){
$_SESSION['update_a']='updated';
	header('Location:../user.php');    
}

else{
	die('Some Problem Occured in Server');
}

}
else{

	die('Some Server Error Occured');
}

?>