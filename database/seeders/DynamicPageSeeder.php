<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DynamicPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
            [
                'page_title' => 'Home',
                'page_slug' => 'home',
                'banner' => null,
                'page_content' => '<p>Welcome to our homepage!</p>',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'page_title' => 'About Us',
                'page_slug' => 'about-us',
                 'banner' => null,
                'page_content' => '<p>About our company and team.</p>',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'page_title' => 'Contact',
                'page_slug' => 'contact',
                'banner' => null,
                'page_content' => '<p>Contact us via this page.</p>',
                'status' => 'inactive',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'page_title' => 'Home',
                'page_slug' => 'home',
                'banner' => null,
                'page_content' => '<p>Welcome to our homepage!</p>',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'page_title' => 'About Us',
                'page_slug' => 'about-us',
                 'banner' => null,
                'page_content' => '<p>About our company and team.</p>',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'page_title' => 'Contact',
                'page_slug' => 'contact',
                'banner' => null,
                'page_content' => '<p>Contact us via this page.</p>',
                'status' => 'inactive',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'page_title' => 'Home',
                'page_slug' => 'home',
                 'banner' => null,
                'page_content' => '<p>Welcome to our homepage!</p>',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'page_title' => 'About Us',
                'page_slug' => 'about-us',
                 'banner' => null,
                'page_content' => '<p>About our company and team.</p>',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('dynamic_pages')->insert($pages);
    }
}
