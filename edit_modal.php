<!-- Delete -->
<div class="modal action fade" id="edit_<?php echo $row['code']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">Edit Student</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>

			</div>
			<form id="editForm" action="edit.php?code=<?php echo $row['code']; ?>" method="POST">
				<div class="modal-body">
					<div class="container-fluid">
						<div class="form-group">
							<label for="code">Code</label>
							<input type="text" name="code" class="form-control" value="<?php echo $row['code']; ?>" required>
						</div>
						<div class="form-group">
							<label for="fullname">Fullname</label>
							<input type="text" name="fullname" class="form-control" value="<?php echo $row['fullname']; ?>" required>
						</div>
						<div class="form-group">
							<label for="dob">Date of Birth</label>
							<input type="date" name="dob" class="form-control" value="<?php echo $row['dob']; ?>" required>
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>" required>
						</div>
						<div class="form-group">
							<label for="score">Score</label>
							<input type="number" name="score" class="form-control" value="<?php echo $row['score']; ?>" max="10" step="0.1" required>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
						<button href="edit.php?code=<?php echo $row['code']; ?>" type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
					</div>
			</form>

		</div>
	</div>
</div>