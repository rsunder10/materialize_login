<?php
require_once('dbconnect.php');
require_once('validate.php');
$db= new Database();
$vl=new Validate();

$id=$_SESSION['id'];
$query=sprintf("SELECT * FROM signup WHERE id='%d'",$id);

if(@$result=$db->select_data($query)){

	if($result->num_rows>0){
		$row=$result->fetch_assoc();
		$first=$row['first'];
		$last=$row['last'];
		$email=$row['email'];
		$mobile=$row['mobile'];
		$username=$row['username'];
		$_SESSION['username']=$row['username'];
	}
}

$query=sprintf("SELECT * FROM personal WHERE username='%s'",$username);
if(@$result=$db->select_data($query)){
	if($result->num_rows==0){
		$_SESSION['value_not']='set';
	}
	else{
		$_SESSION['value_not']=NULL;
		$row=$result->fetch_assoc();
		$height=$row['height'];
		$weight=$row['weight'];
		$bmi=$row['bmi'];
		$dd=$row['duedate'];
		$pressure=$row['pressure'];
		$age=$row['age'];
		$gender=$row['gender'];
	}

}

?>