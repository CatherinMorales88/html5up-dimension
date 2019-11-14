<!DOCTYPE HTML>

<html>
	<head>
		<title>Dimension by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span class="icon fa-gem"></span>
						</div>
						<div class="content">
							<div class="inner">
								<h1>Be Creative</h1>
								<p>We look at the world through your own eyes.<br />
								Design your ad, save it and publish it whenever you want.</p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#Create">Create</a></li>
								<li><a href="#Saved">Saved</a></li>
								<li><a href="#Publish">Published</a></li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Create -->
							<article id="Create">
								<h2 class="major">Create</h2>
								<span class="image main"><img src="images/pic01.jpg" alt="" style="height: 20px"/></span>
								<a href="#Text" class="button" style="margin-left:30px">Text</a>
								<a href="#Image" class="button" style="margin-left:120px">Image</a>
								<a href="#Video" class="button" style="margin-left:120px">Video</a>
								<span class="image main"><img src="images/pic01.jpg" alt="" style="height: 20px"/></span>
								<p> Create your ad!. Select from the three possible options: Text, Image and Video.  </p>
								<p> Consult between <a href="#Saved">saved</a> jobs to work on a previously created template or to explore ideas.</p>
							</article>

						<!-- Text -->
						<article id="Text">
							<h2 class="major">Text</h2>
							<span class="image main"><img src="images/pic01.jpg" alt="" style="height: 20px"/></span>
							<form action="upload_text.php" enctype="multipart/form-data" method="post">
								<label for="image1">Text:</label> 
								<input id="text" name="demo-text" type="text" maxlength="140" placeholder="Enter your text">
								<span class="image main"><img src="images/pic01.jpg" alt="" style="height: 20px"/></span>
								<section>
									<h3 class="major">Configuration</h3>
										<div>
											<label for="demo-name">Name for Project</label>
											<input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
										</div>
										<div>
											<label for="demo-email" style="margin-top: 15px;">X-Axis</label>
											<input style="width: 30%;" type="text" name="demo-x" id="demo-x" value="" placeholder="0 px" />
										</div>
										<div>
											<label for="demo-email" style="margin-top: 15px;">Y-Axis</label>
											<input style="width: 30%;" type="text" name="demo-y" id="demo-y" value="" placeholder="0 px" />
										</div>
										<div>
											<label for="demo-email" style="margin-top: 15px;">Z-Axis</label>
											<input style="width: 30%;" type="text" name="demo-z" id="demo-z" value="" placeholder="0 px" />
										</div>
										<input type="submit" value="Upload" style="margin-top: 30px; margin-left: 230px;">
								</section>
							</form>
							<p> Remember that only images in JPG and PNG formats can be loaded. </p>
						</article>

						<!-- Image -->
						<article id="Image">
							<h2 class="major">Image</h2>
							<span class="image main"><img src="images/pic01.jpg" alt="" style="height: 20px"/></span>
							<form action="upload_image.php" enctype="multipart/form-data" method="post">
								<label for="image1">Select your image:</label> 
								<input id="image1" name="image1" size="30" type="file" style="margin-left:80px">
								<span class="image main"><img src="images/pic01.jpg" alt="" style="height: 20px"/></span>
								<section>
									<h3 class="major">Configuration</h3>
										<div>
											<label for="demo-name">Name for Project</label>
											<input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
										</div>
										<div>
											<label for="demo-email" style="margin-top: 15px;">X-Axis</label>
											<input style="width: 30%;" type="text" name="demo-x" id="demo-x" value="" placeholder="0 px" />
										</div>
										<div>
											<label for="demo-email" style="margin-top: 15px;">Y-Axis</label>
											<input style="width: 30%;" type="text" name="demo-y" id="demo-y" value="" placeholder="0 px" />
										</div>
										<div>
											<label for="demo-email" style="margin-top: 15px;">Z-Axis</label>
											<input style="width: 30%;" type="text" name="demo-z" id="demo-z" value="" placeholder="0 px" />
										</div>
										<input type="submit" value="Upload" style="margin-top: 30px; margin-left: 230px;">
								</section>
							</form>
							<p> Remember that only images in JPG and PNG formats can be loaded. </p>
						</article>

						<!-- Video -->
						<article id="Video">
							<h2 class="major">Video</h2>
							<span class="image main"><img src="images/pic01.jpg" alt="" style="height: 20px"/></span>
							<form action="upload_video.php" enctype="multipart/form-data" method="post">
								<label for="video">Select your video:</label> 
								<input id="video" name="video" size="30" type="file" style="margin-left:80px">
								<span class="image main"><img src="images/pic01.jpg" alt="" style="height: 20px"/></span>
								<section>
									<h3 class="major">Configuration</h3>
										<div>
											<label for="demo-name">Name for Project</label>
											<input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
										</div>
										<div>
											<label for="demo-email" style="margin-top: 15px;">X-Axis</label>
											<input style="width: 30%;" type="text" name="demo-x" id="demo-x" value="" placeholder="0 px" />
										</div>
										<div>
											<label for="demo-email" style="margin-top: 15px;">Y-Axis</label>
											<input style="width: 30%;" type="text" name="demo-y" id="demo-y" value="" placeholder="0 px" />
										</div>
										<div>
											<label for="demo-email" style="margin-top: 15px;">Z-Axis</label>
											<input style="width: 30%;" type="text" name="demo-z" id="demo-z" value="" placeholder="0 px" />
										</div>
										<input type="submit" value="Upload" style="margin-top: 30px; margin-left: 230px;">
								</section>
							</form>
							<p> Remember that only videos in MP4 and WEBM formats can be loaded. </p>
						</article>

						<!-- Saved -->
						<article id="Saved">
							<h2 class="major">Saved</h2>
							<span class="image main"><img src="images/pic01.jpg" alt="" style="height: 20px"/></span>
							<h4>Stopped Project</h4>
								<div class="table-wrapper">
									<table class="alt">
										<thead>
											<tr>
												<th>Name</th>
												<th>Type</th>
												<th>Publish</th>
											</tr>
										</thead>
										<tbody>
											<?php 
												$db = new SQLite3('Database_Files.db');
												$res = $db->query('SELECT id,name,Format_File FROM Publish WHERE Status="STOPPED"');
												while ($row = $res->fetchArray()) {	
													$ID=$row['id'];									
													$nameProject=$row['name'];
													$locationProject=$row['Format_File'];
											?>
											<tr>
												<td><?php echo $nameProject?></td>
												<td><?php echo $locationProject?></td>	
												<td>
												<form action="published.php" enctype="multipart/form-data" method="post">
													<input id="ID" name="ID" type="text" style="display:none" value="<?php echo $ID;?>">
													<section>
														<input type="submit" value="Upload" style="margin-top: 30px; margin-left: 230px;">
													</section>
												</form>
												</td>
											</tr>
											<?php
													}?>	
										</tbody>
									</table>
								</div>
							</section>
							<span class="image main"><img src="images/pic01.jpg" alt="" style="height: 20px"/></span>
							<p>Check all saved projects.</p>
						</article>

						<!-- Publish -->
						<article id="Publish">
							<h2 class="major">Published</h2>
							<span class="image main"><img src="images/pic01.jpg" alt="" style="height: 20px"/></span>
							<h4>Published Project</h4>
								<div class="table-wrapper">
									<table class="alt">
										<thead>
											<tr>
												<th>Name</th>
												<th>Type</th>
											</tr>
										</thead>
										<tbody>
											<?php 
												$db = new SQLite3('Database_Files.db');
												$res = $db->query('SELECT name,Format_File FROM Publish WHERE Status="PUBLISHED"');
												while ($row = $res->fetchArray()) {											
													$nameProject=$row['name'];
													$locationProject=$row['Format_File'];
											?>
											<tr>
												<td><?php echo $nameProject?></td>
												<td><?php echo $locationProject?></td>	
											</tr>
											<?php
												}?>	
										</tbody>
									</table>
								</div>
							</section>
							<span class="image main"><img src="images/pic01.jpg" alt="" style="height: 20px"/></span>
							<p>Check all published projects.</p>
						</article>

					</div>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
