<?php

use Pymes\Configuracion\User;
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
        $user = new User;
        $user->name = 'Administrador';
        $user->lastname = 'Sistema';
        $user->username = 'admin';
        $user->phone = '000000';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('admin');
        $user->role_id = 1;
        $user->save();
    }
}
