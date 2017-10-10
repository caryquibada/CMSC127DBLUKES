<html>
<head>
<title>Insert school Data to MYSQL Database Using PHP</title>
</head>
<body>
	<form action="addS.php" method="post">
		School Name:<input type="text" name="sname">
		<br/>
		School Location: <input type="text" name="slocation">
		<br/>
		
		Contact Person: <input type="text" name="scontact_person">
		<br/>
		Activity: <input type="text" name="sactivity">
		<br/>
		Date Visited: <input type="date" name="datevisited">
		<br/>
		<input type="submit" value="Insert">
	</form>
</body>
</html>