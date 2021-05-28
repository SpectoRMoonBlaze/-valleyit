<?php
require '../libs/db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>valley it</title>
	<link rel="icon" href="../photo/ava.png">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
</head>
<body>
	<div class="form">
			<a href="../index.html"><p align="center"><font color="white" size="10" class="h1">valley it</font></a>

		<div class="menu">
			
				<div class="top">
					<font class="topt" class="top"  color="white" title="update every 168 hourse(1 week)">top 10</font>
				</div>

					<div class="youtube">
						<font class="youtubet" color="white" title="on this chanel i upload timelapses">youtube</font>
					</div>

						<div class="vk">
								<font class="vkt" color="white" title="on this group i upload news">vk</font>
							</div>

			<a href="menu/index.php">	<div class="find">
                  			<font color="white" class="ffind">register</font>
                  		</div></a>
					   <a href="menu/1.php">
					   	<div class="find2">
                   <font color='white' class="ffind2">login</font>
                    </div></a>
				<div class="nick">
					<?php echo $_SESSION['logged_user']->login; ?>
				</div>
								
		</div>

		<div class="sideMenu">
			<p align="center"><font color="white" class="cont" size="5">content</font>
				<div class="js">
					<font color="white" class="jst">javascript</font>
					<img src="../photo/js.png" width="38px" height="38px">
				</div>

				<div class="html">
					<font color="white" class="htmlt">html/css</font>
					<img src="../photo/html.png" width="38px" height="38px">
				</div>

				<div class="php">
					<font color="white" class="phpt">php</font>
					<img src="../photo/php.png" width="50px" height="27px" class="phpp">
				</div>

				<div class="wallpapers">
					<font color="white" class="wallpaperst">wallpapers</font>
					<img src="../photo/wall.png" width="30px" height="30px" class="phpp">
				</div>

				<div class="soft">
					<font color="white" class="softt">soft</font>
					<img src="../photo/soft.png" width="30px" height="30px" class="softp">
				</div>
		</div>
			<p align="center"><font color="white" size="10" class="new1">new</font>
				<div class="new">
					

				</div>

				<div class="sidebar">
					
				
				<div class="reklama">
					</div>
					
					<p align="center"><font color="white" size="5">reklama</font>
				</div>
	</div>
</body>
</html>