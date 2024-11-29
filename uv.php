<!DOCTYPE html>
 <html>
  <head>
  <meta charset="UTF-8">
  <title>Վերբեռնել թղթապանակը</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  </head>
  <body>
	<div class="container mt-5">
	  <form action="#" method="post" enctype="multipart/form-data"> 
	  <div class="form-group">
Folder:<input type="text" name="foldername" /><br/><br/>
	  </div>
	  <div class="form-group">
	  Select Folder to Upload: <input type="file" name="files[]" id="files" multiple directory="" webkitdirectory="" moxdirectory="" /><br/><br/> 
	  </div>
	  <input class="btn btn-primary" type="Submit" value="Upload" name="upload" />
	  </form>
	</div>
  </body>
  </html>
  <?php
  if(isset($_POST['upload']))
  {
  	if($_POST['foldername'] != "")
  	{
  		$foldername=$_POST['foldername'];
  		if(!is_dir($foldername)) mkdir($foldername);
  		foreach($_FILES['files']['name'] as $i => $name)
		{
  		    if(strlen($_FILES['files']['name'][$i]) > 1)
  		    {  move_uploaded_file($_FILES['files']['tmp_name'][$i],$foldername."/".$name);
  		    }
  		}
  		echo "Folder is successfully uploaded";
  	}
  	else
  	    echo "Վերբեռնել թղթապանակը name is empty";
  }
  ?>