<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        //php artisan db:seed --class=UsersTableSeeder
        //php artisan migrate:refresh --seed

        DB::table('users')->insert([
            'name' => 'admin',
            'rol' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);
        DB::table('users')->insert([
            'name' => 'xurxo',
            'rol' => 'alumno',
            'email' => 'xurxo@alumno.com',
            'password' => bcrypt('admin'),
        ]);
        DB::table('users')->insert([
            'name' => 'manuel',
            'rol' => 'alumno',
            'email' => 'manuel@alumno.com',
            'password' => bcrypt('admin'),
        ]);
        DB::table('users')->insert([
            'name' => 'tejedor',
            'rol' => 'profesor',
            'email' => 'tejedor@profesor.com',
            'password' => bcrypt('admin'),
        ]);

        DB::table('hechos')->insert([
            'titulo' => 'Accion social',
            'descripcion' => 'ayuda a huerfanos',
            'slug'=> 'a',
            'user_id' => '3',
            'curso_academico' => '4',
            'fecha_hecho' => '1993-10-05',
            'nivel_autorizacion' => '1',
            'etiquetas_id'=> '1',
            'created_at' =>'2017-11-04',
            'updated_at' =>'2017-11-04',
        ]);

        DB::table('hechos')->insert([
            'titulo' => 'ONG',
            'descripcion' => 'ayuda a monjas',
            'slug'=> 'a',
            'user_id' => '4',
            'curso_academico' => '2',
            'fecha_hecho' => '2000-10-05',
            'nivel_autorizacion' => '2',
            'etiquetas_id'=> '2',
            'created_at' =>'2017-11-04',
            'updated_at' =>'2017-11-04',
        ]);

        DB::table('etiquetas')->insert([
            'id_hecho' => '1',
            'nombre' => 'CV',
            'created_at' =>'2017-11-04',
            'updated_at' =>'2017-11-04',
        ]);
        DB::table('etiquetas')->insert([
            'id_hecho' => '1',
            'nombre' => 'Voluntariado',
            'created_at' =>'2017-11-04',
            'updated_at' =>'2017-11-04',
        ]);
        DB::table('etiquetas')->insert([
            'id_hecho' => '2',
            'nombre' => 'CV',
            'created_at' =>'2017-11-04',
            'updated_at' =>'2017-11-04',
        ]);

    }
}
