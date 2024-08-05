<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Gallery;
use App\Models\Post;
use App\Models\Testimonial;
use App\Models\Ticket;
use App\Models\TicketCategory;
use App\Models\Transaction;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'username' => 'Testuser',
            'email' => 'test@gmail.com',
            'password' => bcrypt('password'),
        ]);

        User::factory()->create(
            [
                'name' => 'Admin',
                'username' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('password'),
                'is_admin' => true,
            ]
        );

        Category::create([
            'name' => 'Nature',
            'slug' => 'nature',
        ]);

        Category::create([
            'name' => 'History',
            'slug' => 'history',
        ]);

        Category::create([
            'name' => 'Entertainment',
            'slug' => 'entertainment',
        ]);

        Post::factory(70)->create();

        TicketCategory::create([
            'name' => "Nature",
            "slug" => "nature",
        ]);

        TicketCategory::create([
            'name' => "Entertainment",
            "slug" => "entertainment",
        ]);

        TicketCategory::create([
            'name' => "History",
            "slug" => "history",
        ]);

        Ticket::factory(100)->create();

        Testimonial::factory(20)->create();

        Gallery::factory(20)->create();

        Transaction::factory(200)->create();
    }
}
