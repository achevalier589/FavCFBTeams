<h2>Add a Band</h2>
<form class="form-horizontal" action="actions/add_band.php" method="post">
	<div class="control-group">
		<label class="control-label" for="band_name">Band Name</label>
		<div class="controls">
			<?php echo input('band_name','required') ?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="band_genre">Genre</label>
		<div class="controls">
			<?php echo input('band_genre','required') ?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="band_numalbums"># Albums</label>
		<div class="controls">
			<?php echo input('band_numalbums','required') ?>
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