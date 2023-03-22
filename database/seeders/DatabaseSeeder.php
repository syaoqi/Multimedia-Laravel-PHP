<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
               Post::create([
           'title' => 'Mitsubishi Car',
           'slug' => 'mitsubishi-car',
            'user_id' => 1,
           'body' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut hic quam debitis. Excepturi inventore nulla esse, adipisci saepe sequi similique architecto culpa asperiores in? Recusandae nemo molestias quas animi ipsum inventore cupiditate est, harum odit dignissimos deleniti tenetur ea, soluta consectetur beatae deserunt qui consequatur? Aspernatur rem soluta qui asperiores deleniti est atque facere, non officia sequi quisquam assumenda nam exercitationem iusto sint saepe libero fuga aut dicta autem a?',
           'category_id' => 3

        ]);
        Post::create([
            'title' => 'Honda Car',
            'slug' => 'Honda-car',
            'user_id' => 1,

            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut hic quam debitis. Excepturi inventore nulla esse, adipisci saepe sequi similique architecto culpa asperiores in? Recusandae nemo molestias quas animi ipsum inventore cupiditate est, harum odit dignissimos deleniti tenetur ea, soluta consectetur beatae deserunt qui consequatur? Aspernatur rem soluta qui asperiores deleniti est atque facere, non officia sequi quisquam assumenda nam exercitationem iusto sint saepe libero fuga aut dicta autem a?',
            'category_id' => 1

        ]);
        Post::create([
            'title' => 'Toyota Car',
            'slug' => 'toyota-car',
            'user_id' => 1,
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut hic quam debitis. Excepturi inventore nulla esse, adipisci saepe sequi similique architecto culpa asperiores in? Recusandae nemo molestias quas animi ipsum inventore cupiditate est, harum odit dignissimos deleniti tenetur ea, soluta consectetur beatae deserunt qui consequatur? Aspernatur rem soluta qui asperiores deleniti est atque facere, non officia sequi quisquam assumenda nam exercitationem iusto sint saepe libero fuga aut dicta autem a?',
            'category_id' => 2

        ]);
        // Category::create([
        //     'name' => 'Art',
        //     'slug' => 'art'
        // ]);

        // Category::create([
        //     'name' => 'Nature',
        //     'slug' => 'nature'
        // ]);

        // Category::create([
        //     'name' => 'Football',
        //     'slug' => 'football'
        // ]);
        // Category::create([
        //     'name' => 'Cartoon',
        //     'slug' => 'Cartoon'
        // ]);

    }


}
