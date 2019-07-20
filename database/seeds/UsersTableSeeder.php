<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

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
        $user = User::where('email','stephenkoyanagi@shaw.ca')->first();

        if( !$user) {
            User::create([
                'name' => 'Stephen Koyanagi',
                'email' => 'stephenkoyanagi@shaw.ca',                
                'password' => Hash::make('password')
            ]);
        }
    }
}
