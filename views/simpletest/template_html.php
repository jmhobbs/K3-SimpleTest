<html>
	<head>
		<title>SimpleTest // <?php echo $title; ?></title>
		<style>
			.results {
				border: 1px solid #444;
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
			.test {
				border: 1px solid #777;
				padding: 5px 5px 0;
				margin: 10px 5px;
			}
			.test h3 {
				margin: 0;
				text-transform: uppercase;
				float: left;
			}
			.test-case, .test-method {
				float: left;
				margin-left: 10px;
				border-left: 2px solid #444;
				padding-left: 10px;
			}
			.clear { clear: both; }
			.message {
				margin: 10px 0;
				background: #FFF;
				padding: 5px 10px;
				border: 1px solid #999;
			}
			.pass, .complete {
				background: #AFA; 
			}
			.skip {
				background: #FFA;
			}
			.fail, .exception, .error {
				background: #FAA;
			}
			.results > div {
				padding: 3px 5px; 
			}
			pre {
				background: #EEE;
				color: #000;
				padding: 10px;
				border: 1px solid #999;
			}
		</style>
	</head>
	<body>
		<?php echo $content; ?>
	</body>
</html>
