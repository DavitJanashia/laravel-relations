<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Ospiti;



$factory->define(Ospiti::class, function (Faker $faker) {
    return [
      'firstname' => $faker-> firstName()
      // 'lastname' => $faker-> lastName()
      // 'firstname' => 'ciao 1',
      // 'lastname' => 'ciao 2'
    ];
});
?>
