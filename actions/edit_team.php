<pre>$_POST <?php print_r($_POST) ?></pre>
<pre>$_GET <?php print_r($_GET) ?></pre>

<?php 
session_start();

// Read file into array
$lines = file('../data/teams.csv',FILE_IGNORE_NEW_LINES);

// Replace line with new values
$lines[$_POST['linenum']] = "{$_POST['team_name']},{$_POST['team_record']},{$_POST['team_ranking']}";

// Create the string to write to the file
$data_string = implode("\n",$lines);

// Write the string to the file, overwriting the current contents\
$f = fopen('../data/teams.csv','w');
fwrite($f,$data_string);
fclose($f);

$_SESSION['message'] = array(
		'text' => 'Your team has been edited.',
		'type' => 'info'
);

// Redirect to the main page\
header('location:../?p=list_teams');

?>