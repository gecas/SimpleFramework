<!DOCTYPE html>
<html>
<head>
	<title>Beehive Leaks</title>
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
	<link rel="shortcut icon" type="image/png" href="./assets/favicon.png"/>
	<link rel="stylesheet" href="./css/app.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta name="keywords" content="beehive leaks, pill #1618">
</head>
<body>
	<?php
	 foreach(Session::getMessages() as $message): ?>
		<div class="alert alert-<?php echo $message['type']; ?> fade in">
		<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
		<?php echo $message['message']; ?></div>
		<?php endforeach; ?>
		<section class="main">
		<div class="content-wrapper">
			<div class="pill"></div>

			<div class="pill-text-wrap">

			<div class="pill-text">
				<h1>Pill #1618</h1>
				<h3>Human mind is designed <span>to serve more than one body.</span></h3>
			</div>

			<div class="pill-text">
				<h4>Beehive's secret data is being processed.</h4>
			</div>

			<div class="pill-text">
				<h5>Be the first one to get the leaks:</h5>
				<form action="/email" method="POST" class="form">
					<input type="email" name="email" required placeholder="email address" />
					<button class="submit-button" type="submti"></button>
				</form>
			</div>

			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>