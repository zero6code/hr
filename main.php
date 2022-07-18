<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color">
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<link rel="stylesheet" type="text/css" href="css/nav.css">
	<title>ระบบบริหารทรัพยากรบุคคล โรงพยาบาลสวนสราญรมย์</title>
	<!-- CSS only -->

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body class="bg-primary">
<?php 
	require_once('view/view-main.php');
	echo ">>>>>".$_SESSION['id_user']." ".$_SESSION['pname']." ".$_SESSION['fname']." ".$_SESSION['lname']. " >>>".session_id();
?> 

<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>