<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*User::truncate();
        Post::truncate();
        Category::truncate();*/
            Post::factory(40)->create();
        /*$user = User::factory()->create([
            'name' => 'Milad Rahimi'
        ]);
        Post::factory(10)->create([
            'user_id'   => $user->id
        ]);*/
         /*$user = User::factory()->create();

         $personal = Category::create([
             'name' => 'Personal',
             'slug' => 'personal'
         ]);
         $work = Category::create([
             'name' => 'Work',
             'slug' => 'work'
         ]);
         $public = Category::create([
             'name' => 'Public',
             'slug' => 'public'
         ]);

         Post::create([
             'user_id'  => $user->id,
             'category_id' => $personal->id,
             'slug' => 'my-first-post',
             'title' => 'My-First-Post',
             'excerpt' => '<p>lorem ipsume is a our material</p>',
             'body'     => '<p>lorem ipsume is a our materiallorem ipsume is a our materiallorem ipsume is a our materiallorem ipsume is a our materiallorem ipsume is a our materiallorem ipsume is a our material</p>'
         ]);

         Post::create([
             'user_id'  => $user->id,
             'category_id' => $work->id,
             'slug' => 'my-work-post',
             'title' => 'My-Work-Post',
             'excerpt' => '<p>lorem ipsume is a our material</p>',
             'body'     => '<p>lorem ipsume is a our materiallorem ipsume is a our materiallorem ipsume is a our materiallorem ipsume is a our materiallorem ipsume is a our materiallorem ipsume is a our material</p>'
         ]);

         Post::create([
             'user_id'  => $user->id,
             'category_id' => $public->id,
             'slug' => 'my-public-post',
             'title' => 'My-Public-Post',
             'excerpt' => '<p>lorem ipsume is a our material</p>',
             'body'     => '<p>lorem ipsume is a our materiallorem ipsume is a our materiallorem ipsume is a our materiallorem ipsume is a our materiallorem ipsume is a our materiallorem ipsume is a our material</p>'
         ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);*/
    }
}
