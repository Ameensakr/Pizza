<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<style>
	body{
		padding-top:20px;
	}
		
	</style>
</head>
<body>
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Admin <b>Page</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="add_page.php" class="btn btn-success" style="margin-right: 30px; background-color:gold; color:black;	" ><i class="material-icons">&#xE147;</i> <span>Add New Pizza</span></a>
						<a href="employee_page.php" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Manage Employee</span></a>					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
				<tr>
					<th>id</th>
					<th>Name</th>
					<th>Price</th>
					<th>Photo</th>
				</tr>
				</thead>
				<tbody>

				<?php
				// Include config file
				require_once "connect.php";

				// Attempt select query execution
				$sql = "SELECT * FROM pizza";

				$result = mysqli_query($link, $sql);
				?>
				<?php
				while($row = mysqli_fetch_array($result)){
				?>

				<tr>

					<td><?php echo $row['Order_id']?></td>
					<td><?php echo $row['Name']?></td>
					<td><?php echo $row['Price']?></td>
					
					<td><img src="<?php echo $row['Photo']?>" alt="pizza-1" width=70px height=70px></td>
					<td style="padding-right:0px;">
						<a href="edit_page.php?id=<?php echo $row['Order_id'];?>" class="btn btn-success" style="margin-right:10px; " ><i class="material-icons">&#xE147;</i> <span>Edit</span></a>
						<a href="delete.php?id=<?php echo $row['Order_id'];?>" class="btn btn-success" style="background-color:#ff2a26;" ><i class="material-icons">&#xE147;</i> <span>Delete</span></a>
					</td>
					
				
				</tr>
				<?php
				}
				?>
				<?php
				mysqli_close($link);
				?>

				</tbody>
			</table>

		</div>
	</div>
</div>

</body>
</html>