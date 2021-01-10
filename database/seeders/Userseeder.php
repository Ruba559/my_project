<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'name'=>'Ruba',
          'email'=> 'Ruba.abdalbaqi_99@hotmail.com',
          'password'=>Hash::make('123')
      ]);
    }
}
