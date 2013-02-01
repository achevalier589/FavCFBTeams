<?php
// Display message if there is one in session data
if(isset($_SESSION['message'])) {
	// Display message
		echo "<div class=\"alert alert-{$_SESSION['message']['type']}\">{$_SESSION['message']['text']}</div>";
	
		// Remove message from session
	unset($_SESSION['message']);
}

// Store the 'p' parameter from the query string into a variable
if(isset($_GET['p'])) {
	$p = $_GET['p'];
} else {	
	$p = 'list_teams';
}

include("views/$p.php");
?>