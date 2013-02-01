<h2>All Teams</h2>
<table class="table table-hover">
	<tr>
		<th>Name</th>
		<th>Record</th>
		<th>Ranking</th>
	</tr>
<?php 
// Read all lines of the CSV file into an array
$lines = file('data/teams.csv',FILE_IGNORE_NEW_LINES);

// Counter variable for line number
	$i = 0;

// Iterate over the array of lines
foreach($lines as $line) {
	$parts = explode(',',$line); // $parts is an array of 3 parts
	$name = $parts[0];
	$record = $parts[1];
	$ranking = $parts[2];
	echo '<tr>';
	echo "<td>$name</td>";
	echo "<td>$record</td>";
	echo "<td>$ranking</td>";
	echo "<td><a href=\"./?p=form_edit_team&team=$i\" class=\"btn btn-warning\"><i class=\"icon-edit icon-white\"></i></a> 
		  <a href=\"./actions/delete_team.php?linenum=$i\" class=\"btn btn-danger\"><i class=\"icon-trash icon-white\"></i></td>";
	echo'</tr>';
	
	$i++; // Increment line number
}
?>
</table>
<!-- The file function in PHP returns an array of all the lines that are listed -->