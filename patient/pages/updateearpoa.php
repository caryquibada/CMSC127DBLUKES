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
    $sql="UPDATE ear_plan SET medical_consult='$medical' where patient_id=$pid";
    if(!mysqli_query($connect,$sql)){
      echo '<script language="javascript" type="text/javascript"> 
      window.location = "error.php";
      </script>';
    }
    $sql="UPDATE ear_plan SET cpclearance='$cp' where patient_id=$pid";
    if(!mysqli_query($connect,$sql)){
      echo '<script language="javascript" type="text/javascript"> 
      window.location = "error.php";
      </script>';
    }
    $sql="UPDATE ear_plan SET admission='$admission' where patient_id=$pid";
    if(!mysqli_query($connect,$sql)){
      echo '<script language="javascript" type="text/javascript"> 
      window.location = "error.php";
      </script>';
    }
    $sql="UPDATE ear_plan SET discharge='$discharge' where patient_id=$pid";
    if(!mysqli_query($connect,$sql)){
      echo '<script language="javascript" type="text/javascript"> 
      window.location = "error.php";
      </script>';
    }
    $sql="UPDATE ear_plan SET surgery='$surgery' where patient_id=$pid";
    if(!mysqli_query($connect,$sql)){
      echo '<script language="javascript" type="text/javascript"> 
      window.location = "error.php";
      </script>';
    }
    $sql="UPDATE ear_plan SET followup='$followup' where patient_id=$pid";
    if(!mysqli_query($connect,$sql)){
      echo '<script language="javascript" type="text/javascript"> 
      window.location = "error.php";
      </script>';
	}
    $sql="UPDATE ear_plan SET others='$other' where patient_id=$pid";
    if(!mysqli_query($connect,$sql)){
      echo '<script language="javascript" type="text/javascript"> 
      window.location = "error.php";
      </script>';
    }
    $sql="UPDATE ear_plan SET medicaldate='$medicaldate' where patient_id=$pid";
    if(!mysqli_query($connect,$sql)){
      echo '<script language="javascript" type="text/javascript"> 
      window.location = "error.php";
      </script>';
    }
    $sql="UPDATE ear_plan SET cpdate='$cpdate' where patient_id=$pid";
    if(!mysqli_query($connect,$sql)){
      echo '<script language="javascript" type="text/javascript"> 
      window.location = "error.php";
      </script>';
    }
    $sql="UPDATE ear_plan SET admissiondate='$admissiondate' where patient_id=$pid";
    if(!mysqli_query($connect,$sql)){
      echo '<script language="javascript" type="text/javascript"> 
      window.location = "error.php";
      </script>';
    }
    $sql="UPDATE ear_plan SET surgerydate='$surgerydate' where patient_id=$pid";
    if(!mysqli_query($connect,$sql)){
      echo '<script language="javascript" type="text/javascript"> 
      window.location = "error.php";
      </script>';
    }
    $sql="UPDATE ear_plan SET dischargedate='$dischargedate' where patient_id=$pid";
    if(!mysqli_query($connect,$sql)){
      echo '<script language="javascript" type="text/javascript"> 
      window.location = "error.php";
      </script>';
    }
    $sql="UPDATE ear_plan SET followupdate='$followupdate' where patient_id=$pid";
    if(!mysqli_query($connect,$sql)){
      echo '<script language="javascript" type="text/javascript"> 
      window.location = "error.php";
      </script>';
    }
    $sql="UPDATE ear_plan SET othersdate='$othersdate' where patient_id=$pid";
    if(!mysqli_query($connect,$sql)){
      echo '<script language="javascript" type="text/javascript"> 
      window.location = "error.php";
      </script>';
    }
    $sql="UPDATE ear_plan SET confirmed='$confirmed' where patient_id=$pid";
    if(!mysqli_query($connect,$sql)){
      echo '<script language="javascript" type="text/javascript"> 
      window.location = "error.php";
      </script>';
    }
    $sql="UPDATE ear_plan SET interviewed='$interview' where patient_id=$pid";
    if(!mysqli_query($connect,$sql)){
      echo '<script language="javascript" type="text/javascript"> 
      window.location = "error.php";
      </script>';
    }
    $sql="UPDATE ear_plan SET assessment='$assessment' where patient_id=$pid";
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