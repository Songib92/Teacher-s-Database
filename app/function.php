<?php 

	/**
	 * File Uploading System Setup
	*/

	function fileUpload($file, $location = '', $file_type = ['jpg', 'png', 'jpeg'], $size = 1024){

		//File Information Setup
		$file_name	= $file['name'];
		$file_tmp_name	= $file['tmp_name'];
		$file_size	= $file['size'] / 1024;

		// File Extension Check
		$file_array = explode('.', $file_name);
		$file_extension = strtolower(end($file_array));


		// Unique Name Setup
		$unique = md5(time().rand()).'.'. $file_extension; 

		// File Size Fixing
		if ($file_size > $size) {
			$file_size_Check = false;
		}else{
			$file_size_Check = true;
		}

		$message = null;
		// File Type Checking
		if (in_array($file_extension, $file_type) == false) {
			$message = "<p class='alert alert-danger'> আপনার ফাইল ফরমেট ঠিক হয়নি !! <button class='close' data-dismiss='alert'>&times;</button></p>";
		}elseif( $file_size_Check == false){
			$message = "<p class='alert alert-danger'> আপনার ফাইলের সাইজ বড় !! <button class='close' data-dismiss='alert'>&times;</button></p>";
		}else{

		// Upload File
		move_uploaded_file($file_tmp_name, $location . $unique);
		}

		// Return Value Setup
		return [
			'file_name'  => $unique,
			'message'	 => $message,
		];	

	}











