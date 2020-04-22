<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ArticuloProveedor;
use Faker\Generator as Faker;

$factory->define(ArticuloProveedor::class, function (Faker $faker) {
    return [
        'articulo_id' => rand(1,100),
        'proveedor_id' => rand(1,100)
    ];
});
