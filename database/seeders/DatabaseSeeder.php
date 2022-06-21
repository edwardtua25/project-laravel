<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data =array([
            'name'=>'Edward Tua Panjaitan',
            'username'=>'edward',
            'email'=>'eltona@gmail.com',
            'role'=>'a',
            'password'=>Hash::make('eltonacafe')
        ]);
        foreach ($data as $d) {
            User::create([
                'name' => $d['name'],
                'username' => $d['username'],
                'email' => $d['email'],
                'password' => $d['password'],
                'role' => $d['role'],
            ]);
        }
    }
}
