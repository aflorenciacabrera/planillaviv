<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();
        $role_ing = Role::where('name', 'ingresador')->first();
        $role_encar = Role::where('name', 'encargado')->first();
        
        // Administrador
        $user = new User();
        $user->name = 'ADMINISTRADOR';
        $user->email = 'admin';
        $user->password = bcrypt( '12345678');
        $user->save();
        $user->roles()->attach($role_admin);
        
        // Encargado
        $user = new User();
        $user->name = 'LIDIA ESTER BLANCO';
        $user->email = 'leblanco';
        $user->password = bcrypt('12345678');
        $user->save();
        $user->roles()->attach( $role_encar);

        // Ingresadores
        $user = new User();
        $user->name = 'MARGARITA LOVATO TORRES';
        $user->email = 'mltorres';
        $user->password = bcrypt('12345678');
        $user->save();
        $user->roles()->attach($role_ing);
        
        $user = new User();
        $user->name = 'ROSARIO PIOLI';
        $user->email = 'rpioli';
        $user->password = bcrypt('12345678');
        $user->save();
        $user->roles()->attach($role_ing);

        $user = new User();
        $user->name = 'ROSARIO GARRIDO';
        $user->email = 'rgarrido';
        $user->password = bcrypt('12345678');
        $user->save();
        $user->roles()->attach($role_ing);

        $user = new User();
        $user->name = 'JUAN CARLOS BATTILANA';
        $user->email = 'jcbattilana';
        $user->password = bcrypt('12345678');
        $user->save();
        $user->roles()->attach($role_ing);

        $user = new User();
        $user->name = 'JORGE ACUÑA';
        $user->email = 'jacuna';
        $user->password = bcrypt('12345678');
        $user->save();
        $user->roles()->attach($role_ing);
    }
}
