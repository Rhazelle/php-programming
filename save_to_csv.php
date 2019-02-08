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