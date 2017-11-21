<?php
	$connect = mysqli_connect('localhost','root','');
	
	if(!$connect){
		echo 'No connection to server';
	}
	if(!mysqli_select_db($connect,'lukedb')){
		echo 'Database "lukedb" is not selected';
    }
    $pid=$_GET['pid'];
    $names=$_POST['myNames'];
    $relation=$_POST['myRelation'];
    $age=$_POST['myAge'];
    $sex=$_POST['mySex'];
    $CV=$_POST['myCV'];
    $EA=$_POST['myEA'];
    $occu=$_POST['myOccu'];
    $remark=$_POST['myRemarks'];
    for ($x = 0; $x < sizeof($names); $x++) {
        $query="INSERT INTO FAMILY(PATIENT_ID,FAMILY_NAME,RELATIONSHIP,AGE,SEX,CIVIL_STATUS,EDUCATIONAL_ATTAINMENT,OCCUPATION,REMARK) values ('$pid','$names[$x]','$relation[$x]','$age[$x]','$sex[$x]','$CV[$x]','$EA[$x]','$occu[$x]','$remark[$x]')";
        if(!mysqli_query($connect,$query)){
            echo '<script language="javascript" type="text/javascript"> 
            window.location = "error.php";
            </script>';
        }else{
            echo '<script language="javascript" type="text/javascript"> 
            window.location = "newns1.php?pid='.$pid.'";
            </script>';
        }
    } 
?>