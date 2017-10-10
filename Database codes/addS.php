<?php
	$connect = mysqli_connect('localhost','root','');
	
	if(!$connect){
		echo 'No connection to server';
	}
	if(!mysqli_select_db($connect,'upcmscdb')){
		echo 'Database "upcmscdb" is not selected';
	}
	$sname=$_POST['sname'];
	$location=$_POST['slocation'];
	$contact_person=$_POST['scontact_person'];
	$activity=$_POST['sactivity'];
	$date_visited=$_POST['datevisited'];
	$sql="INSERT INTO school(SCHOOL_NAME,LOCATION,CONTACT_PERSON,ACTIVITY) VALUES ('$sname','$location','$contact_person','$activity')";
	if(!mysqli_query($connect,$sql)){
		echo 'Insert failure';
	}else{
		echo 'Inserted';
	}
	header("refresh:0.5; url=add_school.php");
?>