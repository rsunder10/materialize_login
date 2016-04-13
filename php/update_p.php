<?php
session_start();
require_once('dbconnect.php');
require_once('validate.php');
$db=new Database();
$vl=new Validate();
if(isset($_POST['height'])&&isset($_POST['weight'])&&isset($_POST['dd'])&&isset($_POST['pressure'])&&isset($_POST['age'])&&isset($_POST['gender']))
{
extract($_POST);
$height=$vl->test_input($height);
$weight=$vl->test_input($weight);
$dd=$vl->test_input($dd);
$gender=$vl->test_input($gender);
$age=$vl->test_input($age);
$pressure=$vl->test_input($pressure);
$bmi=($weight/(($height*$height)/10000));
$username=$_SESSION['username'];
$query=sprintf("INSERT INTO `personal` (`height`,`weight`, `bmi`, `duedate`, `pressure`, `age`,`username` ,`gender`) VALUES ('%d', '%d', '%f', '%s', '%d', '%d','%s','%s');",$db->escape_string($height),$db->escape_string($weight),$db->escape_string($bmi),$db->escape_string($dd),$db->escape_string($pressure),$db->escape_string($age),$db->escape_string($username),$db->escape_string($gender));
echo $query;
if($result=$db->insert_data($query)){
	$_SESSION['update_p']='updated';
	header('Location:../user.php');    
}
else{
	die('This Server Problem');
}

}
else{
	die('Some Server Problem');
}


?>