<?php

$mykey1=$_REQUEST['key1'];
$status='delete';

include 'connect.php';
mysql_query("update tbl_album set status='$status' where albumid = '$mykey1'");
echo "<script>location.href='viewalbum.php'</script>"

?> 