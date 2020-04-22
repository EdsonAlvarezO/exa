<?php

use Illuminate\Database\Seeder;

class ArticuloProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ArticuloCategoria::class, 100)->create();
    }
}
