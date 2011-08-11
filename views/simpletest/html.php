<?php foreach( $groups as $group ): ?>
<?php echo View::factory( 'simpletest/html/group' )->bind( 'group', $group )->render(); ?>
<?php endforeach; ?>

<div class="results">
	<div class="result complete">
		<div class="result-label">Complete:</div>
		<div class="result-value"><?php echo html::chars( $test_case_progress . "/" . $test_case_count ); ?></div>
	</div>
	<div class="result pass">
		<div class="result-label">Passed:</div>
		<div class="result-value"><?php echo html::chars( $pass_count ); ?></div>
	</div>
	<div class="result fail">
		<div class="result-label">Failed:</div>
		<div class="result-value"><?php echo html::chars( $fail_count ); ?></div>
	</div>
	<div class="result exception">
		<div class="result-label">Exception:</div>
		<div class="result-value"><?php echo html::chars( $exception_count ); ?></div>
	</div>
</div>
