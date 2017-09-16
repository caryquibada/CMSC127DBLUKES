<?php
	$connect = mysqli_connect('localhost','root','');
	
	if(!$connect){
		echo 'No connection to server';
	}
	if(!mysqli_select_db($connect,'lukes')){
		echo 'Database "lukes" is not selected';
	}
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$sql="INSERT INTO patient (PATIENT_FNAME,PATIENT_LNAME) VALUES ('$fname','$lname')";
	if(!mysqli_query($connect,$sql)){
		echo 'Insert failure';
	}else{
		echo 'Inserted';
	}
	header("refresh:2; url=add_patient.php");
?>