<?php

use Illuminate\Database\Seeder;

class ArticuloCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ArticuloProveedor::class, 100)->create();
    }
}
