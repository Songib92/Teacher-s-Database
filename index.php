<?php 

	require_once "app/database.php";
	require_once "app/function.php";

 ?>

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
	

	
	<?php 

	/**
	 * Teacher's Data Form Setup
	 */

		if ( isset($_POST['submit']) ) {
			
			// Value Get 
			$fname		= $_POST['fname'];
			$email		= $_POST['email'];
			$cell		= $_POST['cell'];
			$dep		= $_POST['dep'];
			$jdate		= $_POST['jdate'];			
			$address	= $_POST['address'];
			$bgroup		= $_POST['bgroup'];			
			$status		= $_POST['status'];

			//Radio Value Fixing
			if (isset($_POST['mpo'])) {
				$mpo	= $_POST['mpo'];
			}

			//File Upload
			$photo 	=$_FILES['photo'];

			/**
			 * Form Validation Check
			 */
			if ( empty($fname) || empty($email) || empty($cell) || empty($dep) || empty($jdate) || empty($mpo) || empty($address) || empty($bgroup) || empty($status) ) {

				$message = "<p class='alert alert-danger'> আপনার সবগুলো তথ্য দিয়ে ঘরগুলো পূরণ করুন !! <button class='close' data-dismiss='alert'>&times;</button></p>";
			}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$message = "<p class='alert alert-warning'> আপনার আপনার ইমেইল এড্রেসটি সঠিক নয় !! <button class='close' data-dismiss='alert'>&times;</button></p>";
			}else{

				$sql = "INSERT INTO teachers_information (fname, email, cell, dep, jdate, mpo, address, bgroup, status) VALUES ('$fname','$email','$cell','$dep','$jdate','$mpo','$address','$bgroup','$status')";

				$connection	-> query($sql);

				$message = "<p class='alert alert-success'> আপনার তথ্য পূরণ সঠিক হয়েছে !! <button class='close' data-dismiss='alert'>&times;</button></p>";

			}





		}




	 ?>
	

	<div class="wrap">
		<a class="btn btn-sm btn-primary" href="table.php">All Data</a>
		<div class="card shadow">
			<div class="card-body">
				<h2>Sign Up</h2>
				<?php 
				if (isset($message)) {
					echo $message;
				}
				 ?>
				<form action="" method="POST" enctype="multipart/form-data" >
					<div class="form-group">
						<label for="">Full Name</label>
						<input name="fname" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Deparment/Subject</label>
						<select name="dep" class="form-control" id="">
							<option value="">--Select--</option>
							<option value="Accounting">Accounting</option>
							<option value="Bangla">Bangla</option>
							<option value="Math">Math</option>
							<option value="Agriculture">Agriculture</option>
							<option value="Computer Science">Computer Science</option>
							<option value="Heigher Math">Heigher Math</option>
							<option value="Chemistry">Chemistry</option>
							<option value="Biology">Biology</option>
							<option value="Business Study">Business Study</option>
							<option value="English">English</option>
						</select>
					</div>
					<div class="form-group">
						<label for="">Date of Join</label>
						<br>
						<input name="jdate" type="date">
					</div>
					<div class="form-group">
						<label for="">MPO Status</label>
						<br>
						<input name="mpo" type= "radio" value= "Yes" id="yyy"><label for="yyy">Yes</label>
						<input name="mpo" type= "radio" value= "No" id="nnn"><label for="nnn">No</label>
					</div>
					<div class="form-group">
						<label for="">Address</label>
						<input name="address" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Blood Group</label>
						<select name="bgroup" class="form-control" id="">
							<option value="">--Select--</option>
							<option value="A Positive (A+)">A Positive (A+)</option>
							<option value="A Negative (A-)">A Negative (A-)</option>
							<option value="B Positive (B+)">B Positive (B+)</option>
							<option value="B Negative (B-)">B Negative (B-)</option>
							<option value="O Positive (O+)">O Positive (O+)</option>
							<option value="O Negative (O-)">O Negative (O-)</option>
							<option value="AB Positive (AB+)">AB Positive (AB+)</option>
							<option value="AB Negative (AB-)">AB Negative (AB-)</option>
						</select>
					</div>
					<div class="form-group">
						<label for="">Photo</label>
						<input name="photo" class="form-control" type="file">
					</div>
					<div class="form-group">
						<input name="status" type="checkbox" checked value="Published" id="status"> <label for="">Published</label>
					</div>

					<div class="form-group">
						<input name="submit" class="btn btn-primary" type="submit" value="Add Information">
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