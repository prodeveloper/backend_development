<?php
  // Sessions use cookies which use headers and as such must appear at the beginning
  session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Playing with sessions</title>
	</head>
	<body>
		
		<?php
			$_SESSION["first_name"] = "chencha";
			$name = $_SESSION["first_name"];
			echo $name;
		?>

	</body>
</html>
