<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
		$arrayValues = ['Student', 'Teacher',
	                                  'Alumni', 'Admin',
	                                  'Coordinator', 'Chair'];
	    $idnumber = '14'. $faker->unique()->numberBetween($min = 100000 , $max = 999999);

	    return [
	        'firstname'     => $faker->firstName,
            'middlename'    => $faker->lastName,
            'lastname'      => $faker->lastName,
            'idNumber'      => $idnumber,
            'gender'        => 'Male',
            'password'      => bcrypt($idnumber),
            'description'   => $faker->paragraph,
            'yearLevel'     => '4',    
            'role'      => $faker->randomElement($arrayValues),
	        'remember_token' => str_random(10),
	    ];
});