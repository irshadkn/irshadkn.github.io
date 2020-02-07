<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Oil painting in coimbatore, Pencil art in coimbatore - Art Fever</title>
        <meta charset="UTF-8">
        <meta name="description" content="Oil painting in coimbatore, Pencil art in coimbatore, Color pencil art in coimbatore, Buy painting in coimbatore, Best painting artist in coimbatore.">
        <meta name="author" content="Irshad">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/stylesheet.css">
        <link rel="stylesheet" href="css/menu.css">
		<script src="js/menu.js"></script>
		<style type="text/css">
			#gallery{
				text-align: center;
				margin-left:150px;
				margin-right:150px;
			}
			.frame{
				display:inline-block;
				border-top-style:double;
				border-bottom-style:double;
				border-top-color:#ff5627;
				border-bottom-color:#ffc400;
				border-top-width:8px;
				border-bottom-width:8px;
				border-left: 3px solid #ff5627;
				border-right: 3px solid #ffc400;
				width:300px;
				height:300px;
				margin:15px 15px;
			}
			img
			{
				display:block;
				margin:0 auto;
				max-width:280px;
				max-height:280px;
			}
			
			@media screen and (max-width: 600px) {
				#gallery{
				text-align: center;
				margin-left:0px;
				margin-right:0px;
			}
			}
		</style>
	</head>
<body>
	<div class="img_container1">
        <img class="seperator" src="images/tool1.png" alt="Painting Tools">
    </div>
	<header id="top">
		<img id="logo" src="images\artfever.png" alt="Art Fever Logo"/>
	</header>
	<nav class="topnav" id="myTopnav">
		<a href="index.php">Home</a>
		<a href="about.php">About Us</a>
		<a href="#" class="active">Gallery</a>
		<a href="contact.php">Contact Us</a>
		<a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
	</nav>
	<div id="gallery">
	<h2 class="box_title centered">Gallery</h2>
	<?php
	$folder_path = 'gallery/';
	$num_files = glob($folder_path . "*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE);
	$folder = opendir($folder_path);
	if($num_files > 0)
	{
		while(false !== ($file = readdir($folder)))
		{
			$file_path = $folder_path.$file;
			$extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
			if($extension=='jpg' || $extension =='png' || $extension == 'gif' || $extension == 'bmp')
			{
				?>
				<div class="frame">
				<a href="<?php echo $file_path; ?>"><img src="<?php echo $file_path; ?>"/></a>
				</div>
				<?php
			}
		}
	}
	else
	{
		echo "No Images Found";
	}
	closedir($folder);
	?>
	</div>
	<footer id="bottom">
        <p>Copyright © ArtFever</p>
    </footer>
</body>
</html>