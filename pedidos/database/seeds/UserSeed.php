<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon; 

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
	        'name' => 'root',
	        'email' => 'root@pedidos.com',
	        'identificacion' => '34256456',
	        'tipo'=> 'Administrador',
	        'telefono' => 324275765, 
	        'direccion' => 'mz cas diagonal',
	        'password' => bcrypt('12345'),
	        'created_at' => Carbon::now(),
      	]);
    }
}
