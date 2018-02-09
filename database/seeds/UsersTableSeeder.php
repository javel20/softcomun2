<?php

use App\Role;
use App\User;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = Role::create([
            'name' => 'root',
            'display_name' => 'Administrador principal',
            'descripcion' => 'asd'
        ]);

        //User::create(['name' => 'javier elias','email' => 'javier_el_balla@hotmail.com', 'password' => bcrypt('javier20'), 'estado' => 'Activo']);
        $user = User::create([
            'name' => 'javier elias',
            'email' => 'javier_el_balla@hotmail.com',
            'password' => bcrypt('javier20'),
            'estado' => 'Activo',
            'role_id' => '1'
        ]);
    }
}