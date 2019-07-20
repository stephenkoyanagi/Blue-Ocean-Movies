<?php

use Illuminate\Database\Seeder;

use App\User;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::find(1);

        $user->genres()->create([
            'id' => 16,
            'name' => 'Animation'
        ]);

        $user->genres()->create([
            'id' => 18,
            'name' => 'Drama'
        ]);

        $user->genres()->create([
            'id' => 28,
            'name' => 'Action'
        ]);

        $user->genres()->create([
            'id' => 35,
            'name' => 'Comedy'
        ]);

        $user->genres()->create([
            'id' => 53,
            'name' => 'Thriller'
        ]);

        $user->genres()->create([
            'id' => 12,
            'name' => 'Adventure'
        ]);

        $user->genres()->create([
            'id' => 80,
            'name' => 'Crime'
        ]);

        $user->genres()->create([
            'id' => 99,
            'name' => 'Documentary'
        ]);
        
        $user->genres()->create([
            'id' => 10751,
            'name' => 'Family'
        ]);

        $user->genres()->create([
            'id' => 14,
            'name' => 'Fantasy'
        ]);

        $user->genres()->create([
            'id' => 36,
            'name' => 'History'
        ]);
          
        $user->genres()->create([
            'id' => 27,
            'name' => 'Horror'
        ]);
          
        $user->genres()->create([
            'id' => 10402,
            'name' => 'Music'
        ]);

        $user->genres()->create([
            'id' => 9648,
            'name' => 'Mystery'
        ]);

        $user->genres()->create([
            'id' => 10749,
            'name' => 'Romance'
        ]);

        $user->genres()->create([
            'id' => 878,
            'name' => 'Science Fiction'
        ]);

        $user->genres()->create([
            'id' => 10770,
            'name' => 'TV Movie'
        ]);
        
        $user->genres()->create([
            'id' => 10752,
            'name' => 'War'
        ]);

        $user->genres()->create([
            'id' => 37,
            'name' => 'Western'
        ]);

    }
}
