<?php 

	require_once "app/database.php";
	require_once "app/function.php";

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
		

	<div class="wrap-table">
	<a class="btn btn-sm btn-primary" href="index.php">Add Data</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>All Data</h2>
				<table class="table table-striped">
					<thead>

						<tr>
							<th>#</th>
							<th>Full Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Depertment</th>
							<th>Join Date</th>
							<th>MPO Status</th>
							<th>Address</th>
							<th>Blood Group</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>

					</thead>
					<tbody>



						<?php 
						/**
						 * Teacher's Database Connection Setup Without Photo
						 */

						$sql = "SELECT * FROM teachers_information";
						$data = $connection -> query($sql);

						$i = 1;
						while ( $final_data = $data -> fetch_assoc() ) :
						



						 ?>
						<tr>
							<td><?php echo $i; $i++; ?></td>
							<td><?php echo $final_data['fname']; ?></td>
							<td><?php echo $final_data['email']; ?></td>
							<td><?php echo $final_data['cell']; ?></td>
							<td><?php echo $final_data['dep']; ?></td>
							<td><?php echo $final_data['jdate']; ?></td>
							<td><?php echo $final_data['mpo']; ?></td>
							<td><?php echo $final_data['address']; ?></td>
							<td><?php echo $final_data['bgroup']; ?></td>
							<td><img src="teacher photo/<?php echo $final_data['teacher photo']; ?>" alt=""></td>
							<td>
								<a class="btn btn-sm btn-info" href="#">View</a>
								<a class="btn btn-sm btn-warning" href="#">Edit</a>
								<a class="btn btn-sm btn-danger" href="#">Delete</a>
							</td>
						</tr>
						<?php endwhile; ?>
												

					</tbody>
				</table>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>