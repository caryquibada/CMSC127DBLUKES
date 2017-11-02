<?php
	$connect = mysqli_connect('localhost','root','');
	
	if(!$connect){
		echo 'No connection to server';
	}
	if(!mysqli_select_db($connect,'lukedb')){
		echo 'Database "lukedb" is not selected';
	}
	$sname=$_POST['sname'];
	$location=$_POST['slocation'];
	$contact_person=$_POST['scontact_person'];
	$activity=$_POST['sactivity'];
	$date_visited1=$_POST['datevisited'];
	$date_visited=date('Y-m-d H:i',strtotime($date_visited1));
	$sql="INSERT INTO school(SCHOOL_NAME,LOCATION,CONTACT_PERSON,ACTIVITY,DATE_VISITED) VALUES ('$sname','$location','$contact_person','$activity','$date_visited')";
	if(!mysqli_query($connect,$sql)){
		echo '<script language="javascript" type="text/javascript"> 
		window.location = "newschool.php?id=0";
		</script>';
		
	}else{
		echo '<script language="javascript" type="text/javascript"> 
		window.location = "newschool.php?id=1";
		</script>';
	}
?>