<html>
	<head>
		<title><?php echo $title; ?></title>
		<style>
			.results {
				border: 1px solid #444;
				padding: 10px;
				margin: 10px 5px;
			}
			.result-label { 
				width: 100px;
				text-align: right;
				font-weight: bold;
				display: inline-block;
			}
			.result-value {
				width: 200px;
				display: inline-block;
				text-align: right;
			}
		</style>
	</head>
	<body>
		<?php echo $content; ?>
	</body>
</html>
