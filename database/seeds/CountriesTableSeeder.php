<?php

use Illuminate\Database\Seeder;

use App\User;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::findorfail(1);
        
        $user->countries()->create([
            'code' => 'CA',
            'name' => 'Canada'
        ]);

        $user->countries()->create([
            'code' => 'US',
            'name' => 'United States of America'
        ]);
    }
}
