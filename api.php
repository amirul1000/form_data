<?php

    $status = move_uploaded_file($_FILES['files']['tmp_name'],"images/".$_FILES['files']['name']);
	if($status ==TRUE)
	{
		echo "File has been submitted successfully";
	}
	else
	{
		echo "File uploading fail";
	}
	
	print_r($_REQUEST);

?>