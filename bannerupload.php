<?php
$postdate=date("d/m/y");

					$target_dir="uploads/";
					$target_file=$target_dir.basename($_FILES["filetoupload"]["name"]);

					if(move_uploaded_file($_FILES["filetoupload"]["tmp_name"],$target_file))
					{
					//echo"The file".basename($_FILES["filetoupload"]["name"])."has been uploaded.";
					echo "Banner  have Successfuly Posted";
					}
					else
					{
					echo "sorry there was an error uploading file.";	
					}	
					
	$query=mysqli_query($cn,"insert into banner(date,banner_pic)values('$postdate','$target_file')");				
		?>