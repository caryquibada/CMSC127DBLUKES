<?php
	$connect = mysqli_connect('localhost','root','');
	
	if(!$connect){
		echo 'No connection to server';
	}
	if(!mysqli_select_db($connect,'lukedb')){
		echo 'Database "lukedb" is not selected';
    }
    $pid=$_GET['pid'];
    $visual=$_POST['visual'];
    $cause=$_POST['cause'];
    $medicaldate=date('Y-m-d H:i',strtotime($_POST['medicaldate']));
    $cpdate=date('Y-m-d H:i',strtotime($_POST['cpdate']));
    $surgerydate=date('Y-m-d H:i',strtotime($_POST['surgerydate']));
    $otherdate=$_POST['othersdate'];
    $othersdate="";
    for($i=0;$i<sizeof($_POST['othersdate']);$i++){
        $othersdate=$othersdate.' '.date('Y-m-d H:i',strtotime($otherdate[$i]));
    }
    $medical=$_POST['medical'];
    $cp=$_POST['cp'];
    $surgery=$_POST['surgery'];
    $other="";
    $others=$_POST['othersremarks'];
    for($i=0;$i<sizeof($_POST['othersremarks']);$i++){
        $other=$other.' '.$others[$i];
    }
    $assessment=$_POST['assessment'];
    $confirmed=$_POST['confirmed'];
    $interview=$_POST['interviewed'];
	$sql="INSERT INTO eye_plan(visually_impared,cause_disability,medical,cpclearance,surgery,others,medicaldate,cpclearancedate,surgerydate,othersdate,assement,confirmed,interviewed,patient_id) VALUES ('$visual','$cause','$medical','$cp','$surgery','$other','$medicaldate','$cpdate','$surgerydate','$othersdate','$assessment','$confirmed','$interview','$pid')";
	if(!mysqli_query($connect,$sql)){
		echo '<script language="javascript" type="text/javascript"> 
        window.location = "error.php";
        </script>';
	}else{
		echo '<script language="javascript" type="text/javascript"> 
        window.location = "viewmore.php?pid='.$pid.'";
        </script>';
		
	}
?>