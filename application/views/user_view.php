<!DOCTYPE html>
<html lang="en">
<head>
	<title>User View</title>
</head>
<body>
<h1><?php
	echo $welcome;
	 ?></h1>
<p>Directory access is forbidden.</p>
<?php
	foreach ($results as $result){
		echo $result->username.'<br>';
	}
	//echo $results;

?>
</body>
</html>
