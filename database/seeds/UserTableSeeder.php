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
        
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin';
        $user->password = bcrypt( '12345678');
        $user->save();
        $user->roles()->attach($role_admin);

        $user = new User();
        $user->name = 'Lidia Esther Blanco';
        $user->email = 'leblanco';
        $user->password = bcrypt('12345678');
        $user->save();
        $user->roles()->attach( $role_encar);

        $user = new User();
        $user->name = 'Margarita Lovato Torres';
        $user->email = 'mltorres';
        $user->password = bcrypt('12345678');
        $user->save();
        $user->roles()->attach($role_ing);
        
        $user = new User();
        $user->name = 'Rosario Pioli';
        $user->email = 'rpioli';
        $user->password = bcrypt('12345678');
        $user->save();
        $user->roles()->attach($role_ing);

        $user = new User();
        $user->name = 'Rosario Garrido';
        $user->email = 'rgarrido';
        $user->password = bcrypt('12345678');
        $user->save();
        $user->roles()->attach($role_ing);

        $user = new User();
        $user->name = 'Juan Carlos Battilana';
        $user->email = 'jcbattilana';
        $user->password = bcrypt('12345678');
        $user->save();
        $user->roles()->attach($role_ing);

        $user = new User();
        $user->name = 'Jorge Acuña';
        $user->email = 'jacuna';
        $user->password = bcrypt('12345678');
        $user->save();
        $user->roles()->attach($role_ing);
    }
}
