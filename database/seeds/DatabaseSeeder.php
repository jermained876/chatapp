<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        factory(User::class)->create([
            'email'=>'j@gmail.com',
            'name'=>'jermaine'
        ]);
        factory(User::class)->create([
            'email'=>'jojo@gmail.com',
            'name'=>'kim'
        ]);
        factory(User::class)->create([
            'email'=>'jd@gmail.com',
            'name'=>'winston'
        ]);

    }
}
