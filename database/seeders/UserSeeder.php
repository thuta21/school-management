<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create();
        $user_type = ['admin' , 'editor', 'tester', 'user'];
        $gender = ['male', 'female'];
        $data = [];
        
        for ($i = 0; $i < 30; $i++)
        {
            $data[] = [
                'user_type' => $user_type[array_rand($user_type)],
                'name' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'gender' => $gender[array_rand($gender)],
                'remember_token' => Str::random(10),
            ];
        };

        foreach (array_chunk($data, 1000) as $chunk)
        {
            User::insert($chunk);
        }
    }
}
