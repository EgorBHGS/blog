<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::factory(5)->create([
            'title' => 'Первый пост',
            'content' => 'Lorem ipsum',
            'description' => 'Lorem',
            'is_published' => true
        ]);
    }
}
