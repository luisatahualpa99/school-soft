<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Student::class, function (Faker $faker) {


    return [
        //
        // 'course_id' => $cursos->id,
        'nombre' => $faker->firstName,
        'nombre2' => $faker->firstNameFemale,
        'apellido' => $faker->lastName,
        'apellido2' => $faker->lastName,
        'tipo_documento' => 'Targeta identidad',
        'documento' => $faker->bankAccountNumber,
        'genero' => 'lorem',
        'email' => $faker->freeEmail,
        'edad' => $faker->biasedNumberBetween($min = 12, $max = 19),
        'direccion' => $faker->address,
        'telefono' => $faker->phoneNumber,

        'nombre_p' => $faker->name,
        'nombre2_p' => $faker->firstNameFemale,
        'apellido_p' => $faker->lastName,
        'apellido2_p' => $faker->lastName,
        'documento_p' => $faker->bankAccountNumber,
        'profesion_p' => 'lorem',
        'telefono_p' => $faker->phoneNumber,
        'nombre_m' => $faker->name,
        'nombre2_m' => $faker->firstNameFemale,
        'apellido_m' => $faker->lastName,
        'apellido2_m' => $faker->lastName,
        'documento_m' => $faker->bankAccountNumber,
        'profesion_m' => 'lorem',
        'telefono_m' => $faker->phoneNumber,
    ];
});
