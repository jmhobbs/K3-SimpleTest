<?php defined('SYSPATH') or die('No direct script access.');

Route::set( 'simpletest', '/test(/<action>(/<id>))' )
	->defaults( array(
		'controller' => 'simpletest',
		'action'     => 'index',
	) );

