<?php
	$connect = mysqli_connect('localhost','root','');
	
	if(!$connect){
		echo 'No connection to server';
	}
	if(!mysqli_select_db($connect,'lukedb')){
		echo 'Database "lukedb" is not selected';
    }
    $pid=$_GET['pid'];
    $medicaldate=date('Y-m-d H:i',strtotime($_POST['medicaldate']));
    $cpdate=date('Y-m-d H:i',strtotime($_POST['cpdate']));
    $admissiondate=date('Y-m-d H:i',strtotime($_POST['admissiondate']));
    $surgerydate=date('Y-m-d H:i',strtotime($_POST['surgerydate']));
    $dischargedate=date('Y-m-d H:i',strtotime($_POST['dischargedate']));
    $followupdate=date('Y-m-d H:i',strtotime($_POST['followupdate']));
    $othersdate="";
    $otherdate=$_POST['othersdate'];
    for($i=0;$i<sizeof($_POST['othersdate']);$i++){
        $othersdate=$othersdate.' '.date('Y-m-d H:i',strtotime($otherdate[$i]));
    }
    $medical=$_POST['medical'];
    $cp=$_POST['cp'];
    $admission=$_POST['admission'];
    $surgery=$_POST['surgery'];
    $discharge=$_POST['discharge'];
    $followup=$_POST['followup'];
    $other="";
    $others=$_POST['othersremarks'];
    for($i=0;$i<sizeof($_POST['othersremarks']);$i++){
        $other=$other.' '.$others[$i];
    }
    $assessment=$_POST['assessment'];
    $confirmed=$_POST['confirmed'];
    $interview=$_POST['interviewer'];
	$sql="INSERT INTO ear_plan(medical_consult,cpclearance,admission,discharge,surgery,followup,others,medicaldate,cpdate,surgerydate,admissiondate,dischargedate,followupdate,othersdate,assessment,confirmed,interviewed,patient_id) VALUES ('$medical','$cp','$admission','$discharge','$surgery','$followup','$other','$medicaldate','$cpdate','$admissiondate','$dischargedate','$surgerydate','$followupdate','$othersdate','$assessment','$confirmed','$interview','$pid')";
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