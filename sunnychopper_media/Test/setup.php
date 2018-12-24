<?php

	if (!file_exists('../app/Http/Controllers/UsersController.php')) {
		echo "Please install the Users dependency\n";
		exit;
	}

	require('../vendor/laravel/framework/src/Illuminate/Support/Facades/Facade.php');
	require('../vendor/laravel/framework/src/Illuminate/Support/Facades/Schema.php');
	require('../vendor/laravel/framework/src/Illuminate/Support/Traits/Macroable.php');
	require('../vendor/laravel/framework/src/Illuminate/Database/Schema/Blueprint.php');

	// Create routes
	$routes = fopen('../routes/web.php', 'a');
	$route_array = array(
		"Route::get('/testing-1', 'TestController@test_one');",
		"Route::get('/testing-2', 'TestController@test_two');"
	);
	foreach($route_array as $route) {
		fwrite($routes, $route . "\n");
	}
	fclose($routes);

	// Create controller by copying over
	copy(dirname(__FILE__) . '/TestController.php', '../app/Http/Controllers/TestController.php');

	// Create model by copying over
	copy(dirname(__FILE__) . '/Test.php', '../app/Test.php');

	// Create helper class by copying over
	copy(dirname(__FILE__) . '/TestHelper.php', '../app/Custom/TestHelper.php');

	// Create table
	copy(dirname(__FILE__) . '/2018_12_24_103740_create_test_table.php', '../database/migrations/2018_12_24_103740_create_test_table.php');

?>