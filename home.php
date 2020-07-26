<?php

 session_start();
?>
<html>
<head>
<title> Home Page</title>
<link rel="stylesheet" type="text/css" href="style.css">	   
	        <link rel="stylesheet" type="text/css"
</head>
<body>
   <a href="logout.php"> LOGOUT</a>
   <h1>   Welcome <?php echo $_SESSION['username']; ?> </h1>

</body>
</html>