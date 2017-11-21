<?php
	$connect = mysqli_connect('localhost','root','');
	
	if(!$connect){
		echo 'No connection to server';
	}
	if(!mysqli_select_db($connect,'lukedb')){
		echo 'Database "lukedb" is not selected';
    }
    $pid=$_GET['pid'];
    $ebill=$_POST['ebill'];
    $ebill=(int)$ebill;
    $food=$_POST['food'];
    $food=(int)$food;
    $fuel=$_POST['fuel'];
    $fuel=(int)$fuel;
    $rent=$_POST['rent'];
    $rent=(int)$rent;
    $water=$_POST['water'];
    $water=(int)$water;
    $transpo=$_POST['transpo'];
    $transpo=(int)$transpo;
    $educ=$_POST['educ'];
    $educ=(int)$educ;
    $clothing=$_POST['clothing'];
    $clothing=(int)$clothing;
    $medical=$_POST['medical'];
    $medical=(int)$medical;
    $cpload=$_POST['cpload'];
    $cpload=(int)$cpload;
    $others=$_POST['others'];
    $others=(int)$others;
	$sql="INSERT INTO expenses(electric,food,fuel,rent,water,transportation,education,clothing,medical,cellphoneload,others,patient_id) VALUES ($ebill,$food,$fuel,$rent,$water,$transpo,$educ,$clothing,$medical,$cpload,$others,$pid)";
	if(!mysqli_query($connect,$sql)){
		echo '<script language="javascript" type="text/javascript"> 
        window.location = "error.php";
        </script>';
	}else{
		
		echo '<script language="javascript" type="text/javascript"> 
        window.location = "provider.php?pid='.$pid.'";
        </script>';
		
	}
?>