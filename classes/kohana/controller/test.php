<?php

	class Kohana_Controller_Test extends Controller {
	
		public function action_index () {
			$suites = Kohana::config( 'simpletest' )->as_array();
			$this->response->body( View::factory( 'simpletest/index' )->set( 'suites', $suites ) );
		}

		public function action_all () {
			require_once Kohana::find_file( 'vendor', 'simpletest/unit_tester' );

			$suites = Kohana::config( 'simpletest' )->as_array();

			$test = new TestSuite( 'All Tests' );
			foreach( $suites as $name => $tests ) {
				foreach( $tests as $file ) {
					$test->addFile( Kohana::find_file( 'tests', $file ) );
				}
			}
			$test->run( new HTMLUnitTestReporter() );
		}

		public function action_run ( $name ) {
			require_once Kohana::find_file( 'vendor', 'simpletest/unit_tester' );

			$suites = Kohana::config( 'simpletest' )->as_array();

			$test = new TestSuite( $name );
			foreach( $suites[$name] as $file ) {
				$test->addFile( Kohana::find_file( 'tests', $file ) );
			}
			$test->run( new HTMLUnitTestReporter() );

		}

	}

