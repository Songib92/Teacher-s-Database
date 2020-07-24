<?php 

	/**
	 * File Uploading System Setup
	*/

	function fileUpload($file){

		//File Information Setup
		$file_name	= $file['name'];
		$file_tmp_name	= $file['tmp_name'];
		$file_size	= $file['size'];

		// File Extension Check
		$file_array = explode('.', $file_name);
		$file_extension = strtolower(end($file_array));


		// Unique Name Setup
		$unique = md5(time().rand()).'.'. $file_extension;

		// Upload File
		move_uploaded_file($file_tmp_name, '' . $unique);

	}











