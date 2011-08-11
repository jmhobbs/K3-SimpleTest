<div class="group depth-<?php echo $group->depth; ?>">
	<h2><?php echo html::chars( $group->name ); ?></h2>

	<?php foreach( $group->tests as $test ): ?>
		<?php echo View::factory( 'simpletest/html/test/' . $test->type )->bind( 'test', $test )->render(); ?>
	<?php endforeach; ?>

	<?php foreach( $group->groups as $group ): ?>
		<?php echo View::factory( 'simpletest/html/group' )->bind( 'group', $group )->render(); ?>
	<?php endforeach; ?>
</div>
