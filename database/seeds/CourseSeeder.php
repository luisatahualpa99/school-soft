<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Moldes\Course;


class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // factory(Course::class, 10)->create();

        DB::table('courses')->insert([
            'nombre' => 'Sexto 1',
            'anio' => '2022',
        ]);
        DB::table('courses')->insert([
            'nombre' => 'Sexto 2',
            'anio' => '2022',
        ]);
        DB::table('courses')->insert([
            'nombre' => 'Sexto 3',
            'anio' => '2022',
        ]);
        DB::table('courses')->insert([
            'nombre' => 'Sexto 4',
            'anio' => '2022',
        ]);
        DB::table('courses')->insert([
            'nombre' => 'Sexto 5',
            'anio' => '2022',
        ]);
        DB::table('courses')->insert([
            'nombre' => 'Sexto 6',
            'anio' => '2022',
        ]);
        DB::table('courses')->insert([
            'nombre' => 'Sexto 7',
            'anio' => '2022',
        ]);
        DB::table('courses')->insert([
            'nombre' => 'Septimo 1',
            'anio' => '2022',
        ]);
        DB::table('courses')->insert([
            'nombre' => 'Septimo 2',
            'anio' => '2022',
        ]);
        DB::table('courses')->insert([
            'nombre' => 'Septimo 3',
            'anio' => '2022',
        ]);
        DB::table('courses')->insert([
            'nombre' => 'Septimo 4',
            'anio' => '2022',
        ]);
        DB::table('courses')->insert([
            'nombre' => 'Septimo 5',
            'anio' => '2022',
        ]);
        DB::table('courses')->insert([
            'nombre' => 'Octavo 1',
            'anio' => '2022',
        ]);
        DB::table('courses')->insert([
            'nombre' => 'Octavo 2',
            'anio' => '2022',
        ]);
        DB::table('courses')->insert([
            'nombre' => 'Octavo 3',
            'anio' => '2022',
        ]);
        DB::table('courses')->insert([
            'nombre' => 'Octavo 4',
            'anio' => '2022',
        ]);
        DB::table('courses')->insert([
            'nombre' => 'Noveno 1',
            'anio' => '2022',
        ]);
        DB::table('courses')->insert([
            'nombre' => 'Noveno 2',
            'anio' => '2022',
        ]);
        DB::table('courses')->insert([
            'nombre' => 'Noveno 3',
            'anio' => '2022',
        ]);
        DB::table('courses')->insert([
            'nombre' => 'Decimo 1',
            'anio' => '2022',
        ]);
        DB::table('courses')->insert([
            'nombre' => 'Decimo 2',
            'anio' => '2022',
        ]);
        DB::table('courses')->insert([
            'nombre' => 'Undecimo 1',
            'anio' => '2022',
        ]);
    }
}
