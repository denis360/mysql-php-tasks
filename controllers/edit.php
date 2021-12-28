<?php include("./database.php") ?>
<?php 
	if(isset($_GET["id"])) {
		$id = $_GET["id"];
		$result = $con->query("SELECT * FROM tasks WHERE id = $id");
		$row = $result->fetch_assoc();
	}
	if (isset($_POST["update"])) {
		$id = $_GET["id"];
		$title = $_POST["title"];
		$description = $_POST["description"];

		$result = $con->prepare("UPDATE tasks set name = '$title', description = '$description' WHERE id = $id");
		$result->execute();

		$_SESSION["message"] = "Task updated succesfully";
		$_SESSION["message_type"] = "primary";

		header("Location: ../index.php");
	}
?>

<?php include("../includes/header.php") ?>
	<link rel="stylesheet" href="../css/main.css">
	<div class="container p-4">
		<div class="row">
			<div class="col-md-4 mx-auto">
				<div class="card bg-dark text-light rounded-0">
					<div class="card-header">
						<h2>Edit Task</h2>
					</div>
					<div class="card-body">
						<form action="edit.php?id=<?php echo $_GET["id"]; ?>" method="POST">
							<div class="mb-3">
								<input type="text" value="<?php echo $row["name"]; ?>" name="title" autofocus class="form-control bg-dark text-light rounded-0" placeholder="Title">
							</div>
							<div class="mb-3">
								<textarea name="description" cols="30" rows="5" class="text-area form-control bg-dark text-light rounded-0" placeholder="Description"><?php echo $row["description"]; ?></textarea>
							</div>
							<div class="d-grid gap-2">
								<button name="update" value="update" class="btn btn-outline-primary rounded-0">Update</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include("../includes/footer.php") ?>

