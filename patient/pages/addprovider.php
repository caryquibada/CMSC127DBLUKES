<?php
	$connect = mysqli_connect('localhost','root','');
	
	if(!$connect){
		echo 'No connection to server';
	}
	if(!mysqli_select_db($connect,'lukedb')){
		echo 'Database "lukedb" is not selected';
    }
    $pid=$_GET['pid'];
    $name=$_POST['name'];
    $relation=$_POST['relation'];
    $occu=$_POST['occu'];
    $income=$_POST['income'];
    $needs=$_POST['needs'];
    $need="";
    for($i=0;$i<sizeof($needs);$i++){
        $need=$need.' '.$needs[$i];
    }
    $donor=$_POST['donor'];
    $affliation=$_POST['affiliation'];
    $services=$_POST['services'];
    $totalincome=$_POST['income'];
	$sql="INSERT INTO provider(name,occu,relationship,income,needs_provided,donor_name,affiliation,services_provided,total_income,patient_id) VALUES ('$name','$occu','$relation','$income','$need','$donor','$affliation','$services','$totalincome','$pid')";
	if(!mysqli_query($connect,$sql)){
		echo '<script language="javascript" type="text/javascript"> 
        window.location = "error.php";
        </script>';
	}else{
		echo '<script language="javascript" type="text/javascript"> 
        window.location = "choicehub.php?pid='.$pid.'";
        </script>';
		
	}
?>