<div class="modal action fade" id="createModal" aria-labelledby="createModalLabel" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="createModalLabel">Create student</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="createForm" action="create.php" method="POST">
				<div class="modal-body">
					<div class="container-fluid">
						<div class="form-group">
							<label for="code">Code</label>
							<input type="text" name="code" class="form-control" placeholder="Enter Code">
						</div>
						<div class="form-group">
							<label for="fullname">Fullname</label>
							<input type="text" name="fullname" class="form-control" placeholder="Enter Fullname" required>
						</div>
						<div class="form-group">
							<label for="dob">Date of Birth</label>
							<input type="date" name="dob" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" name="email" class="form-control" placeholder="Enter Email" required>
						</div>
						<div class="form-group">
							<label for="score">Score</label>
							<input type="number" name="score" class="form-control" placeholder="Enter Score" max="10" step="0.1" required>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" name="btnCreate" class="btn btn-primary">Create</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</form>

		</div>