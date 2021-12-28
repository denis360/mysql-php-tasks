<?php include("./database.php") ?>
<?php 

	if(isset($_GET["id"])) {
		$id = $_GET["id"];
		echo $id;
		$result = $con->prepare("DELETE FROM tasks WHERE id = $id");

		$result->execute();

		$_SESSION["message"] = "Task deleted succesfully";
		$_SESSION["message_type"] = "danger";

		header("Location: ../index.php");
	}
?>
