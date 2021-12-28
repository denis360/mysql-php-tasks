<?php include("./database.php") ?>
<?php
	$result = $con->query("SELECT * FROM tasks");
?>
<table class="table table-dark table-bordered">
	<thead>
			<tr>
				<td>Title</td>
				<td>Description</td>
				<td>Actions</td>
			</tr>
	</thead>
	<?php foreach($result as $row) { ?>
		<tr>
			<td>
				<?php echo $row["name"]; ?>
			</td>
			<td>
				<?php echo $row["description"]; ?>
			</td>
			<td>	
				<div style="display: flex;">
					<a class="btn btn-outline-success rounded-0 m-1" href="./controllers/edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
					<a class="btn btn-outline-danger rounded-0 m-1" href="./controllers/delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
				</div>
			</td>
		</tr>
	<?php } ?>
</table>
