<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        \App\Admin::create(
            [
                'name' => 'GeeksTalkThursday',
                'email' => 'admin@geekstalkthursday.co.ke',
                'password' => bcrypt('Heart0ftec#'),
            ]
        );
    }
}


