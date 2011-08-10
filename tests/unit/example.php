<?php

	class TestExample extends UnitTestCase {

		function __construct () { parent::__construct( 'Example Test' ); }

		function testAddition () {
			$this->assertFalse( ( 1 + 1 ) === 3 );
			$this->assertTrue( ( 1 + 1 ) === 2 );
		}

		function testBadAddition () {
			$this->assertTrue( ( 1 + 1 ) === 5 );
		}

	}

