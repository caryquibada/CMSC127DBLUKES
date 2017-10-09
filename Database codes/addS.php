<?php
	$connect = mysqli_connect('localhost','root','');
	
	if(!$connect){
		echo 'No connection to server';
	}
	if(!mysqli_select_db($connect,'upcmscdb')){
		echo 'Database "upcmscdb" is not selected';
	}
	$location=$_POST['slocation'];
	$contact_person=$_POST['contact_person'];
	$activity=$_POST['activity'];
	$date_visited=$_POST['datevisited'];
	$sql="INSERT INTO table (PATIENT_FNAME,PATIENT_LNAME) VALUES ('$fname','$lname')";
	if(!mysqli_query($connect,$sql)){
		echo 'Insert failure';
	}else{
		echo 'Inserted';
	}
	header("refresh:0.5; url=add_school.php");
?>