<?php foreach( $groups as $group ): ?>
<?php echo View::factory( 'simpletest/text/group' )->bind( 'group', $group ); ?>
<?php endforeach; ?>

-------------------------------------------------------------------------------

   Cases: <?php echo html::chars( $test_case_progress . "/" . $test_case_count ); ?>
     Pass: <?php echo html::chars( $pass_count ); ?>
     Fail: <?php echo html::chars( $fail_count ); ?>
Exception: <?php echo html::chars( $exception_count ); ?>


