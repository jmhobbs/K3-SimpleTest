<html>
	<head>
		<title>K3-SimpleTest</title>
	</head>
	<body>
		<h2>SimpleTest</h2>
		<p><a href="/test/all">Run All</a></p>
		<ul>
		<?php foreach( $suites as $name => $tests ): ?>
			<li><a href="/test/run/<?php echo html::chars( $name ); ?>"><?php echo html::chars( $name ); ?></a></li>
		<?php endforeach; ?>
		</ul>
	</body>
</html>
