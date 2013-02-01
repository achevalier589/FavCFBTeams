<h2>Add a Team</h2>
<form class="form-horizontal" action="actions/add_team.php" method="post">
	<div class="control-group">
		<label class="control-label" for="team_name">Team Name</label>
		<div class="controls">
			<?php echo input('team_name','required') ?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="team_record">Record</label>
		<div class="controls">
			<?php echo input('team_record','required') ?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="team_ranking">Ranking</label>
		<div class="controls">
			<?php echo input('team_ranking','required') ?>
		</div>
		<div class="form-actions">
		  <button type="submit" class="btn btn-primary">Add to List</button>
		</div>
	</div>
</form>

<!-- FORM SUBMISSION METHODS
Use get or host
Use get when submitting wont result in a change to the server state
Use host when submitting and it WILL result in a change to the server state (E.G. Alter Data File) -->