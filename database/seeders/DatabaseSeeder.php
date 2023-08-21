<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Listing;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(1)->create();

        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
        ]);


        Listing::factory(5)->create([
            'user_id' => $user->id
        ]);

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston MA',
        //     'email' => 'email@gmail.com',
        //     'website' => 'yahoo.com',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing   elit. Provident corrupti perferendis non, quia quo ipsum fugiat quasi voluptas ad sequi saepe repellendus sit quod nulla? non, quia quo ipsum fugiat quasi voluptas ad sequi saepe repellendus sit quod nulla?'
        // ]);

        // Listing::create([
        //     'title' => 'Laravel Developer',
        //     'tags' => 'laravel, livewire, vue.js',
        //     'company' => 'Google',
        //     'location' => 'New York',
        //     'email' => 'fahad@gmail.com',
        //     'website' => 'google.com',
        //     'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing   elit. Provident corrupti perferendis non, quia quo ipsum fugiat quasi voluptas ad sequi saepe repellendus sit quod nulla? non, quia quo ipsum fugiat quasi voluptas ad sequi saepe repellendus sit quod nulla?'
        // ]);
    }
}
