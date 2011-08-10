<?php

	class TestExceptional extends UnitTestCase {

		function __construct () { parent::__construct( 'Throw Some Exceptions' ); }

		function testErrors () {
			trigger_error( 'Oh Noes!', E_USER_ERROR );
			$this->assertTrue( ( 1 + 1 ) === 2 );
		}

		function testThrownException () {
			throw new Exception ( 'ZOMG!' );
			$this->assertTrue( ( 1 + 1 ) === 2 );
		}

	}

