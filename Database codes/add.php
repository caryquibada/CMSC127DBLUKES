<?php
	$connect = mysqli_connect('localhost','root','');
	
	if(!$connect){
		echo 'No connection to server';
	}
	if(!mysqli_select_db($connect,'upcmscdb')){
		echo 'Database "upcmscdb" is not selected';
	}
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$sex=$_POST['formSex'];
	$address=$_POST['address'];
	$cstatus=$_POST['cstatus'];
	$religion=$_POST['religion'];
	$occupation=$_POST['occupation'];
	$cnumber=$_POST['contactnumber'];
	$education=$_POST['formEduc'];
	$sql="INSERT INTO patient (PATIENT_FNAME,PATIENT_LNAME) VALUES ('$fname','$lname')";
	if(!mysqli_query($connect,$sql)){
		echo 'Insert failure';
	}else{
		echo 'Inserted';
	}
	header("refresh:0.5; url=add_patient.php");
?>