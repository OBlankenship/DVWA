<?php

if( isset( $_POST[ 'Upload' ] ) ) {
	// Where are we going to be writing to?
	$target_path  = tempnam("/srv/images/", "");
	//$target_path .= basename( $_FILES[ 'uploaded' ][ 'name' ] );

	$mime_content_type = mime_content_type($_FILES[ 'uploaded' ][ 'tmp_name' ]);

	// Invalid mime_content_type
	if ($mime_content_type != "image/jpeg" and $mime_content_type != "image/png") 
	{
		$html .= '<pre>Invalid file type. We only support .jpg and .png files!</pre>';
	}
	// Valid mime_content_type
	else 
	{
		// Can we move the file to the upload folder?
		if( !move_uploaded_file( $_FILES[ 'uploaded' ][ 'tmp_name' ], $target_path ) ) {
			// No
			$html .= '<pre>Your image was not uploaded.</pre>';
		}
		else {
			// Yes!
			$html .= "<pre>File succesfully uploaded!</pre>";
		}
	}
}

?>
