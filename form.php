<?php

if(isset($_GET['First_Name']) && isset($_GET['Last_Name'])){
	$file=fopen("form_names.csv","a");
	fputcsv($file, [$_GET['First_Name'], & $_GET['Last_Name']]);
	fclose($file);
	echo "name added to csv";
	
	
}
/*echo $_GET['First_Name'];
echo "   ";
echo $_GET['Last_Name'];
*/
?>
<html>
<head>
</head>
<body>
<form action="form.php" method="get">
<label>First Name:</label>
<input type="text" name="First_Name"><br/>
<label>Last Name:</label>
<input type="text" name="Last_Name"><br/>
<button type="submit">Submit</button>



</form>
</body>
</html>