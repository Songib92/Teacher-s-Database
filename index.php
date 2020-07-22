<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Teacher's Database</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	

	<div class="wrap">
		<a class="btn btn-sm btn-primary" href="table.php">All Data</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>Sign Up</h2>

				<form action="" method="POST" >
					<div class="form-group">
						<label for="">Full Name</label>
						<input class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Deparment/Subject</label>
						<select class="form-control" id="">
							<option value="">--Select--</option>
							<option value="">Accounting</option>
							<option value="">Bangla</option>
							<option value="">Math</option>
							<option value="">Agriculture</option>
							<option value="">Computer Science</option>
							<option value="">Heigher Math</option>
							<option value="">Chemistry</option>
							<option value="">Biology</option>
							<option value="">Business Study</option>
							<option value="">English</option>
						</select>
					</div>
					<div class="form-group">
						<label for="">Date of Join</label>
						<br>
						<input type="date">
					</div>
					<div class="form-group">
						<label for="">MPO Status</label>
						<br>
						<input name="mpo" type= "radio" value= "Yes" id="yyy"><label for="yyy">Yes</label>
						<input name="mpo" type= "radio" value= "No" id="nnn"><label for="nnn">No</label>
					</div>
					<div class="form-group">
						<label for="">Address</label>
						<input class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Blood Group</label>
						<select class="form-control" id="">
							<option value="">--Select--</option>
							<option value="">A Positive (A+)</option>
							<option value="">A Negative (A-)</option>
							<option value="">B Positive (B+)</option>
							<option value="">B Negative (B-)</option>
							<option value="">O Positive (O+)</option>
							<option value="">O Negative (O-)</option>
							<option value="">AB Positive (AB+)</option>
							<option value="">AB Negative (AB-)</option>
						</select>
					</div>
					<div class="form-group">
						<label for="">Photo</label>
						<input class="form-control" type="file">
					</div>
					<div class="form-group">
						<label for="">Status</label>
						<input class="form-control" type="text">
					</div>

					<div class="form-group">
						<input class="btn btn-primary" type="submit" value="Sign Up">
					</div>
				</form>
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