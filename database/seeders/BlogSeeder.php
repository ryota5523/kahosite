<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    public function run()
    {
        Blog::create([
            'title' => '最初の記事',
            'date' => now(),
            'image' => 'https://via.placeholder.com/150',
            'url' => 'https://example.com/blog1',
        ]);

        Blog::create([
            'title' => '2番目の記事',
            'date' => now(),
            'image' => 'https://via.placeholder.com/150',
            'url' => 'https://example.com/blog2',
        ]);
    }
}
