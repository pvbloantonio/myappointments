<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Pablo Elgueta',
            'email' => 'pablo.elguetav@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456'), 
            'rut' => '181334339',
            'address' => 'Luis Damann 806 Villa los Alcaldes', 
            'phone' => '931038270',
            'role' => 'admin'
        ]);

        factory(User::class, 50)->create();
    }
}
