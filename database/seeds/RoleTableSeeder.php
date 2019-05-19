<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $role = new Role();
        $role->name = 'admin';
        $role->description = 'Administrator';
        $role->save();
        
        // $role = new Role();
        // $role->name = 'user';
        // $role->description = 'User';
        // $role->save();

        $role = new Role();
        $role->name = 'ingresador';
        $role->description = 'Ingresador';
        $role->save();

        $role = new Role();
        $role->name = 'encargado';
        $role->description = 'Encargado';
        $role->save();

    }
}
