<?php
// MySQL
$mysqli = @new mysqli('localhost', 'root', 'lucerna');

$mysql_running = true;
if (mysqli_connect_errno()) {
    $mysql_running = false;
} else {
	$mysql_version = $mysqli->server_info;
}

$mysqli->close();

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Lucerna LAMP stack</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css" rel="stylesheet" />
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
	<style type="text/css">
	html, body {
		height: 100%;
	}
	#wrap {
		min-height: 100%;
		height: auto !important;
		height: 100%;
		margin: 0 auto -60px;
	}
	#push, #footer {
		height: 60px;
	}
	#footer {
		background-color: #f5f5f5;
	}
	@media (max-width: 767px) {
		#footer {
			margin-left: -20px;
			margin-right: -20px;
			padding-left: 20px;
			padding-right: 20px;
		}
	}
	.container {
		width: auto;
		max-width: 680px;
	}
	.container .credit {
		margin: 20px 0;
	}
	.page-header i {
		float: left;
		margin-top: -5px;
		margin-right: 12px;
	}
	table td:first-child {
		width: 300px;
	}
    </style>
</head>
<body>
	<div id="wrap">
		<div class="container">
			<div class="page-header">
				<i class="fa fa-fire fa-4x"></i>
				<h1>It works!</h1>
			</div>
			<p class="lead">The Lucerna LAMP stack is up and running in a Vagrant VM. Here's some additional information you might need.</p>

			<h3>Installed software</h3>
			<table class="table table-striped">
				<tr>
					<td>PHP Version</td>
					<td><?php echo phpversion(); ?></td>
				</tr>

				<tr>
					<td>MySQL running</td>
					<td><i class="fa fa-<?php echo ($mysql_running ? 'check' : 'remove'); ?>"></i></td>
				</tr>

				<tr>
					<td>MySQL version</td>
					<td><?php echo ($mysql_running ? $mysql_version : 'N/A'); ?></td>
				</tr>
			</table>

			<h3>PHP Modules</h3>
			<table class="table table-striped">
				<tr>
					<td>MySQL</td>
					<td><i class="fa fa-<?php echo (class_exists('mysqli') ? 'check' : 'remove'); ?>"></i></td>
				</tr>

				<tr>
					<td>CURL</td>
					<td><i class="fa fa-<?php echo (function_exists('curl_init') ? 'check' : 'remove'); ?>"></i></td>
				</tr>
			</table>

			<h3>MySQL credentials</h3>
			<table class="table table-striped">
				<tr>
					<td>Hostname</td>
					<td>localhost</td>
				</tr>

				<tr>
					<td>Username</td>
					<td>lucerna</td>
				</tr>

				<tr>
					<td>Password</td>
					<td>lucerna</td>
				</tr>

				<tr>
					<td colspan="2"><em>Note: External access is enabled! Just use <strong><?php echo $_SERVER['SERVER_ADDR'] ?></strong> as host.</em></td>
				</tr>
			</table>
		</div>

		<div id="push"></div>
	</div>

	<div id="footer">
		<div class="container">
			<p class="muted credit"><a href="https://github.com/jp1971/lucerna" target="_blank">Lucerna</a> by <a href="https://github.com/jp1971" traget="_blank">JP1971</a>.</p>
		</div>
	</div>
</body>
</html>
