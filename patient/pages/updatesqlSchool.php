<?php
    $connect = mysqli_connect('localhost','root','');
    $id=$_GET['id'];
	if(!$connect){
		echo 'No connection to server';
	}
	if(!mysqli_select_db($connect,'lukedb')){
		echo 'Database "lukedb" is not selected';
    }
	$schoolname=$_POST['sname'];
	$schoollocation=$_POST['slocation'];
    $contactperson=$_POST['scontact_person'];
    $activity=$_POST['sactivity'];
    $datevisited=$_POST['datevisited'];
	$bday=date('Y-m-d H:i',strtotime($datevisited));
    $sql="UPDATE school SET school_name='$schoolname' where school_id=$id";
    if(!mysqli_query($connect,$sql)){
		echo 'Insert failure school name';
	}
    $sql="UPDATE school SET location='$schoollocation' where school_id=$id";
    if(!mysqli_query($connect,$sql)){
		echo 'Insert failure location';
	}
    $sql="UPDATE school SET contact_person='$contactperson' where school_id=$id";
    if(!mysqli_query($connect,$sql)){
		echo 'Insert failure contact person';
	}
    $sql="UPDATE school SET activity='$activity' where school_id=$id";
    if(!mysqli_query($connect,$sql)){
		echo 'Insert failure activity';
	}
	$sql="UPDATE school SET date_visited='$bday' WHERE school_id=$id";
	if(!mysqli_query($connect,$sql)){
		echo 'Insert failure date';
	}else{
        echo '<script language="javascript" type="text/javascript"> 
		window.location = "updateS.php?id='.$id.'&status=1";
		</script>';
	}
?>