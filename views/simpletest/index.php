<html>
	<head>
		<title>K3-SimpleTest</title>
	</head>
	<body>
		<h2>SimpleTest</h2>
		<p><?php echo html::anchor( route::url( 'simpletest', array( 'action' => 'all' ) ), 'Run All' ); ?></p>
		<ul>
		<?php foreach( $suites as $name => $tests ): ?>
			<li><?php echo html::anchor( route::url( 'simpletest', array( 'action' => 'run', 'id' => $name ) ), html::chars( $name ) ); ?></li>
		<?php endforeach; ?>
		</ul>
	</body>
</html>
