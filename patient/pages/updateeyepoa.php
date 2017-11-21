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
    $surgerydate=date('Y-m-d H:i',strtotime($_POST['surgerydate']));
    $othersdate="";
    $otherdate=$_POST['othersdate'];
    for($i=0;$i<sizeof($_POST['othersdate']);$i++){
        $othersdate=$othersdate.' '.date('Y-m-d H:i',strtotime($otherdate[$i]));
    }
    $medical=$_POST['medical'];
    $cp=$_POST['cp'];
    $surgery=$_POST['surgery'];
    $other="";
    $others=$_POST['othersremarks'];
    for($i=0;$i<sizeof($others);$i++){
        $other=$other.' '.$others[$i];
    }
    $assessment=$_POST['assessment'];
    $confirmed=$_POST['confirmed'];
    $interview=$_POST['interviewed'];
    $sql="UPDATE eye_plan SET medical='$medical' where patient_id=$pid";
    if(!mysqli_query($connect,$sql)){
		echo '<script language="javascript" type="text/javascript">              window.location = "error.php";             </script>';
    }
    $sql="UPDATE eye_plan SET cpclearance='$cp' where patient_id=$pid";
    if(!mysqli_query($connect,$sql)){
		echo '<script language="javascript" type="text/javascript">              window.location = "error.php";             </script>';
    }
    $sql="UPDATE eye_plan SET surgery='$surgery' where patient_id=$pid";
    if(!mysqli_query($connect,$sql)){
		echo '<script language="javascript" type="text/javascript">              window.location = "error.php";             </script>';
    }
    $sql="UPDATE eye_plan SET others='$other' where patient_id=$pid";
    if(!mysqli_query($connect,$sql)){
		echo '<script language="javascript" type="text/javascript">              window.location = "error.php";             </script>';
    }
    $sql="UPDATE eye_plan SET medicaldate='$medicaldate' where patient_id=$pid";
    if(!mysqli_query($connect,$sql)){
		echo '<script language="javascript" type="text/javascript">              window.location = "error.php";             </script>';
    }
    $sql="UPDATE eye_plan SET cpclearancedate='$cpdate' where patient_id=$pid";
    if(!mysqli_query($connect,$sql)){
		echo '<script language="javascript" type="text/javascript">              window.location = "error.php";             </script>';
    }
    $sql="UPDATE eye_plan SET surgerydate='$surgerydate' where patient_id=$pid";
    if(!mysqli_query($connect,$sql)){
		echo '<script language="javascript" type="text/javascript">              window.location = "error.php";             </script>';
    }
    $sql="UPDATE eye_plan SET othersdate='$othersdate' where patient_id=$pid";
    if(!mysqli_query($connect,$sql)){
		echo '<script language="javascript" type="text/javascript">              window.location = "error.php";             </script>';
    }
    $sql="UPDATE eye_plan SET confirmed='$confirmed' where patient_id=$pid";
    if(!mysqli_query($connect,$sql)){
		echo '<script language="javascript" type="text/javascript">              window.location = "error.php";             </script>';
    }
    $sql="UPDATE eye_plan SET inteviewed='$interview' where patient_id=$pid";
    if(!mysqli_query($connect,$sql)){
		echo '<script language="javascript" type="text/javascript">              window.location = "error.php";             </script>';
    }
    $sql="UPDATE eye_plan SET assement='$assessment' where patient_id=$pid";
	if(!mysqli_query($connect,$sql)){
		echo '<script language="javascript" type="text/javascript">              window.location = "error.php";             </script>';
	}else{
        echo '<script language="javascript" type="text/javascript"> 
		window.location = "viewmore.php?pid='.$pid.'";
		</script>';
	}
?>