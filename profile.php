<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['user']; ?></title>
</head>
<body>
<?php
		if(isset($_SESSION['user'])){
			?>
            <a href='logout.php'>Logout</a>
            <?php
            
		}
		else{
			header('Location: /mysite/login.php?msg=unauthorized');
		}
	?>
</body>
</html>