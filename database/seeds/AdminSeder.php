<?php

use Illuminate\Database\Seeder;

class AdminSeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Admin::create([
        'email'=>'mohamed@gmail.com',
        'password'=>bcrypt('mohamed1234'),
        'image' => '../a'


        ]);


    }
}
