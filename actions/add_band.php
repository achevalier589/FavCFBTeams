<?php session_start()?>
<pre><?php print_r($_POST) ?></pre>
<?php
// validate that each piece of info was provided
if( $_POST['band_name'] != '' && 
	$_POST['band_genre'] != '' &&
	$_POST['band_numalbums'] != '') {
	
	// Add this band to the CSV file
	// (1) Open the file for writing
	$f = fopen('../data/bands.csv','a');
	
	// (2) Write the new band's info to the file
	fwrite($f,"\n{$_POST['team_name']},{$_POST['team_record']},{$_POST['team_ranking']}");
	
	// (3) Close the file
	fclose($f);
	
	$_SESSION['message'] = array(
			'text' => 'Your band has been added.',
			'type' => 'success'
	);
	
	// Redirect to list of bands
	header('Location:../?p=list_bands');

} else {
	// Store submitted date into a session data
	$_SESSION['POST'] = $_POST;
	
	// Store error message in session data
	$_SESSION['message'] = array(
			'text' => 'Your band has been added.',
			'type' => 'success'
	);
	
	// Redirect to the form
	header('Location:../?p=form_add_bands');
}