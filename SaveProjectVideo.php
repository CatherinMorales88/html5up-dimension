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
								<h2>Save Poject</h2>
								<span class="image main">
									<video width="320" height="240" controls>
										<source src="
											<?php
												$db = new SQLite3('Database_Files.db');
												$res = $db->query('SELECT * FROM Publish');
												$NewID = 0;
												$Location = "";
												while ($row = $res->fetchArray()) {											
													if ($row['id']>$NewID){
														$NewID = $row['id'];
														$Location = $row['location'];
													}
													else{
														$Location = $Location;
													}
												}				
												echo $Location;
											?>
										">
									</video>
								</span>
								<form action="Save.php" enctype="multipart/form-data" method="post">
									<label>Are you sure you want to save the project?</label> 
									<section>
										<input type="submit" value="Save">
									</section>
								</form>
						</div>
					</header>
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
