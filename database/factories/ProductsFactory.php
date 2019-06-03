<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

// $generos = \Genero::all();finge cambios en el id entre las tablas relacionadas*

$factory->define(Product::class, function (Faker $faker) { //crea fabrica de products
    return [ //la variable faker viene laravel, se puede buscar codigo en GIT
        "name" => $faker->sentence(5),
        "price" => $faker->randomDigit(), //valor aleatorio
        "description" => $faker->sentence(15),
        "stock" => $faker->numberBetween(0, 50), //brinda un numero random entre 0 y 50
        "created_at" => $faker->date(),
        "updated_at" => $faker->date(),
  //    "genre_id" => //finge cambios en el id entre las tablas relacionadas*
    ];
});
