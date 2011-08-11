=== <?php echo $group->name; ?> ===

<?php foreach( $group->tests as $test ): ?>
<?php echo View::factory( 'simpletest/text/test/' . $test->type )->bind( 'test', $test ); ?>

<?php endforeach; ?>

<?php foreach( $group->groups as $group ): ?>
<?php echo View::factory( 'simpletest/text/group' )->bind( 'group', $group ); ?>
<?php endforeach; ?>
