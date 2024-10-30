<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Emmanuel',
            'lastname' => 'Cordoba',
            'email' => 'emmanuel.cordoba@maxisistemas.com.ar',
            'email_alias' => null,
            'active' => true,
            'password' => '123123',
        ]);

        User::factory(10)->create();
    }
}
