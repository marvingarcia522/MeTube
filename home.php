<?php
     session_start();
?>
<!DOCTYPE HTML>

<html>

<head>
 <html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="mystyle.css">
	<title>MeTube</title>
</head>

<body>


       <div class="container">
      <image src="<?php echo $_SESSION['picture'] ?>" class="pic" alt="pic">
      <p>Hello </p>
      <b> <?php echo $_SESSION['givenName'] ?></b>
      <b> <?php echo $_SESSION['familyName'] ?></b>
      <br>
      <a class="logout" href="logout.php">Logout</a>
            </div>
</body>

</html>