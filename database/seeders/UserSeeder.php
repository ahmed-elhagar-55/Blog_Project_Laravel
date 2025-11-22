<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('users')->insert([
            'name' => 'ahmed elhagar',
            'email' => 'elhagar@example.com',
            'password' => Hash::make('password'),
            'type'=>'admin',
            'phone'=>'01207408949'
        ]);

         DB::table('users')->insert([
            'name' => 'mohamed',
            'email' => 'mohamed@example.com',
            'password' => Hash::make('password'),
            'type'=>'writer',
            'phone'=>'01207408949'
        ]);
         DB::table('users')->insert([
            'name' => 'asmaa',
            'email' => 'asmaa@example.com',
            'password' => Hash::make('password'),
            'type'=>'user',
            'phone'=>'01207408949'
        ]);

    }
}
