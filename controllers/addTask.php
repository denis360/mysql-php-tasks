<?php include("./database.php") ?>
<?php
	if (isset($_POST["save_task"])) {
		$name=$_POST["title"];
		$description=$_POST["description"];

		$result = $con->prepare("INSERT INTO `tasks` (`id`, `name`, `description`) VALUES(NULL, '$name', '$description');");
		$result->execute();

		$_SESSION["message_type"] = "success";
		$_SESSION["message"] = "Task added succesfully";
		header("Location: ../index.php");
	}
	
?>

