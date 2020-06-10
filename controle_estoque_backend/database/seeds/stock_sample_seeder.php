<?php

use Illuminate\Database\Seeder;

class stock_sample_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(\App\Categoria::class, 10)->create();
        // factory(\App\Cliente::class, 10)->create();
        // factory(\App\Produto::class, 15)->create();
        factory(\App\Fornecedor::class, 10)->create();

    }
}
