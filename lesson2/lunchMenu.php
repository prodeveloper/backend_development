<?php
        error_reporting(E_ALL);
        ini_set('display_errors', 'On');
	date_default_timezone_set('America/Los_Angeles');
	$today = date("l");
	$myName = "Bob";
	
	$dailyMenu = array(
		"Monday" => "old shoes",
		"Tuesday" => "chewing gum",
		"Wednesday" => "rusty nails",
		"Thursday" => "gravel",
		"Friday" => "sour apples",
		"Saturday" => "brussels sprouts",
		"Sunday" => "bike tires"
	);
	
	// change the date format. Instructions at http://www.php.net/manual/en/function.date.php
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <title>Lunch Menu</title>
    </head>
    <body>
    	<p>Today is <?php print $today?>.</p>
    	<p><?php print $myName?> is going to have <?php print $dailyMenu[$today]?> for lunch!</p>
    </body>
</html>

