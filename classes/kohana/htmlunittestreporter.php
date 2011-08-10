<?php
	
	require_once Kohana::find_file( 'vendor', 'simpletest/reporter' );

	class Kohana_HTMLUnitTestReporter extends HtmlReporter {

		function paintPass ( $message ) {
			parent::paintPass( $message );
			print '<div class="test test-pass">';
			print "<span class=\"pass\">Pass</span> ";
			$breadcrumb = $this->getTestList();
			array_shift( $breadcrumb );
			$file = array_shift( $breadcrumb );
			print implode( " &raquo; ", $breadcrumb );
			print " <div class=\"message\">$message</div>";
			print '</div>';
		}

		function paintFail ( $message ) {
			ob_start();
			parent::paintFail( $message );
			ob_end_clean();
			print '<div class="test test-fail">';
			print "<span class=\"fail\">Fail</span> ";
			$breadcrumb = $this->getTestList();
			array_shift( $breadcrumb );
			$file = array_shift( $breadcrumb );
			print implode( " &raquo; ", $breadcrumb );
			print " <div class=\"message\">$message</div>";
			print "</div>";
		}

		function paintError ( $message ) {
			ob_start();
			parent::paintError( $message );
			ob_end_clean();
			print '<div class="test test-fail">';
			print "<span class=\"fail\">Error</span> ";
			$breadcrumb = $this->getTestList();
			array_shift( $breadcrumb );
			$file = array_shift( $breadcrumb );
			print implode( " &raquo; ", $breadcrumb );
			print " <div class=\"message\">$message</div>";
			print "</div>";
		}

		function paintException ( $exception ) {
			ob_start();
			parent::paintException( $exception );
			ob_end_clean();
			print '<div class="test test-fail">';
			print "<span class=\"fail\">Exception</span> ";
			$breadcrumb = $this->getTestList();
			array_shift( $breadcrumb );
			$file = array_shift( $breadcrumb );
			print implode( " &raquo; ", $breadcrumb );
			$message = 'Unexpected exception of type [' . get_class($exception) .
							'] with message ['. $exception->getMessage() .
							'] in ['. $exception->getFile() .
							' line ' . $exception->getLine() . ']' .
							'<pre class="trace">' . str_replace( DOCROOT, '', $exception->getTraceAsString() ) . '</pre>';
			print " <div class=\"message\">$message</div>";
			print "</div>";
		}

		function paintSkip ( $message ) {
			ob_start();
			parent::paintSkip( $message );
			ob_end_clean();
			print '<div class="test test-skip">';
			print "<span class=\"skip\">Skip</span> ";
			$breadcrumb = $this->getTestList();
			array_shift( $breadcrumb );
			$file = array_shift( $breadcrumb );
			print implode( " &raquo; ", $breadcrumb );
			print " <div class=\"message\">$message</div>";
			print "</div>";
		}

    function paintFooter($test_name) {
        $class = ($this->getFailCount() + $this->getExceptionCount() > 0 ? "final-fail" : "final-pass");
        print "<div class=\"$class\">"; 
        print $this->getTestCaseProgress() . "/" . $this->getTestCaseCount();
        print " test cases complete:\n";
        print "<strong>" . $this->getPassCount() . "</strong> passes, ";
        print "<strong>" . $this->getFailCount() . "</strong> fails and ";
        print "<strong>" . $this->getExceptionCount() . "</strong> exceptions.";
        print "</div>\n";
        print "</body>\n</html>\n";
    }

		function getCss() {
			return parent::getCss() . <<<END
	.message {
		background: white;
		padding: 5px 10px;
		margin: 5px 10px 5px 0;
		border: 1px solid #999;
	}

	.test { 
		padding: 5px 10px; 
		border: 1px solid #444; 
		margin: 10px 0;
	}

	.test-pass { background: #C2FFB0; }
	.test-fail { background: #FFB0B0; }
	.test-skip { background: #FFF7B0; }

	.pass { color: green; }
	.fail { color: #C00000; }
	.skip { color: #B5A300; } 

	.pass, .fail, .skip { 
		display: inline-block; 
		width: 80px; 
		font-weight: bold; 
		text-align: center; 
	}

	.final-fail, .final-pass {
		padding: 10px;
		margin: 10px 0;
		font-size: 30px;
		border: 2px solid #444;
	}

	.final-fail {
		background: #FFB0B0;
	}

	.final-pass { 
		background: #C2FFB0;
	}

	pre.trace {
		padding: 5px 10px;
		border: 1px solid #444;
		background: #EEE;
	}
END;
		}

}
