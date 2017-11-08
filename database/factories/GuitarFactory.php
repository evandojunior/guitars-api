<?php

use Faker\Generator as Faker;
use Faker\Provider\Uuid;
use Faker\Provider\Image;
use Faker\Provider\Company;
use Faker\Provider\Address;
use Faker\Provider\DateTime;
use Faker\Provider\HtmlLorem;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Guitar::class, function (Faker $faker) {
    $faker->addProvider(new Uuid($faker));
    $faker->addProvider(new Company($faker));
    $faker->addProvider(new HtmlLorem($faker));
    $data =  [
      'serial_number' => $faker->uuid,
      'model' => $faker->name,
      'company' => $faker->company,
      'fabrication_date' => $faker->dateTime('now', date_default_timezone_get()),
      'fabrication_country' => $faker->country,
      'specification' =>  $faker->randomHtml(2, 3),
      'image' => $faker->imageUrl(800, 600, 'cats'),
    ];
    return $data;
});
