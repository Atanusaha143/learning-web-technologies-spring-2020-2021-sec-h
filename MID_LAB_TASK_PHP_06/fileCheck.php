<?php
	
	 $file_info = $_FILES['uploadFile'];
	 $file_path = 'Files/'.$file_info['name'];

	 print_r($file_info);

	if(move_uploaded_file($file_info['tmp_name'], $file_path))
	{
		echo "Uploaded";
	}
	else
	{
		echo "Not found";
	}

?>