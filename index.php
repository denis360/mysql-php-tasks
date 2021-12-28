<?php include("./controllers/database.php") ?>

<?php include("./includes/header.php") ?>
	<div class="container p-4">
		<div class="row">
			<div class="col-md-5 mx-auto">
				<?php if (isset($_SESSION["message"])) { ?>
					<div class="alert alert-<?= $_SESSION["message_type"] ?> fade show" role="alert">
						<?= $_SESSION["message"] ?>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  						<span aria-hidden="true">&times;</span>
  					</button>
					</div>
				<?php session_unset(); } ?>
				<div class="card bg-dark text-light mb-4 rounded-0">
					<div class="card-header">
						<h2>MySql Php</h2>
					</div>
					<div class="card-body">
						<form action="./controllers/addTask.php" method="POST">
							<div class="mb-3">
								<input type="text" name="title" class="form-control bg-dark text-light rounded-0" placeholder="Title" autofocus="">
							</div>
							<div class="mb-3">
								<textarea name="description" cols="10" rows="5" class="text-area form-control bg-dark text-light rounded-0" placeholder="Description"></textarea>
							</div>
							<div class="d-grid gap-2">
								<button class="btn btn-outline-primary rounded-0" name="save_task" value="save">Save</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-7 mx-auto">
				<?php include("./controllers/list.php") ?>
			</div>
		</div>	
	</div>

<?php include("./includes/footer.php") ?>
