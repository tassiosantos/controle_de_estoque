<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        //
    ];
});


$factory->define(App\Cliente::class, function (Faker $faker) {
    return [
        'nome' => $faker-> name,
        'endereço' => $faker-> address,
        'contato' => $faker-> phoneNumber
    ];
});

// $factory->define(App\Categoria::class, function (Faker $faker) {
//     return [
//         'nome' => $faker-> name,
//         'situação' => 'true',
        
//     ];
// });

$factory->define(App\Fornecedor::class, function (Faker $faker) {
    return [
        'nome' => $faker->  name,
        'situação' => true

    ];
});

// $factory->define(App\Produto::class, function (Faker $faker) {
//     return [
//         'nome' => $faker->  name,
//         'descrição' => $faker-> paragraph,
//         'estoque' => $faker-> numberBetween(200, 600),
//         'categoria_id' => factory(App\Categoria::class),
//         'fornecedor_id' => factory(App\Fornecedor::class)

//     ];
// });

//serão criados 15 produtos, 15 categorias e 15 fornecedores, assim que
//o factory de Produto for chamado
//Cliente será chamado independentemente.e