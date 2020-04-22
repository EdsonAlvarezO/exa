<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ArticuloCategoria;
use Faker\Generator as Faker;

$factory->define(ArticuloCategoria::class, function (Faker $faker) {
    return [
        'articulo_id' => rand(1,100),
        'categoria_id' => rand(1,100)
    ];
});
