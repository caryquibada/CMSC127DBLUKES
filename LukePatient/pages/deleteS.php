<html>
<body>
<?php
$id = $_GET['id'];
$connect = mysqli_connect('localhost','root','');
if(!$connect){
		echo 'No connection to server';
	}
	if(!mysqli_select_db($connect,'lukedb')){
		echo 'Database "lukedb" is not selected';
	}

// sql to delete a record
$sql = "DELETE FROM school WHERE school_id = $id"; 

if (mysqli_query($connect, $sql)) {
    mysqli_close($connect);
    header('Location: schools.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}
?>
</body>
</html>