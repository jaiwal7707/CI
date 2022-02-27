<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User View</title>
</head>
<body>


	<h1><?php 


	foreach ($results as $object) {
		echo $object->Password."<br>";
	}





	?></h1>

</body>
</html>