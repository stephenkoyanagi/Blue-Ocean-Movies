<?php

use Illuminate\Database\Seeder;

use App\User;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::findorfail(1);
        
        $user->languages()->create([
            'code' => 'en',
            'name' => 'English'
        ]);
    }
}
