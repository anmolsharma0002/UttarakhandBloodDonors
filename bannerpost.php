
							
				<?php
				include("db.php");
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
		
		
		
				<form action="" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label  class="label-control" style="font-family:arial;font-size:10pt;color:black">Upload Banner</label>
						<input  id ="tb" type="file" name="filetoupload" accept="image/gif, image/jpeg, image/png"  class="form-control" required>
					</div>
				<button type="submit">Upload</button>	
				</form>
				
				
				
