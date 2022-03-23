<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        Category::create([
            'name' => 'Technology',
            'slug' => 'technology'
        ]);

        Category::create([
            'name' => 'Animal',
            'slug' => 'animal'
        ]);

        Category::create([
            'name' => 'Plant',
            'slug' => 'plant'
        ]);

        Post::factory(20)->create();

        // User::create([
        //     'name' => 'Farrel Ahmad',
        //     'email' => 'farrelfay.ce@gmail.com',
        //     'password' => bcrypt('1231')
        // ]);

        // User::create([
        //     'name' => 'Mr Pepeng',
        //     'email' => 'pepeng@gmail.com',
        //     'password' => bcrypt('1321')
        // ]);



        // Post::create([
        //     'title' => 'First Post',
        //     'slug' => 'first-post',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea eos modi animi id tempore quibusdam, culpa repellendus',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea eos modi animi id tempore quibusdam, culpa repellendus obcaecati sed distinctio. Vel blanditiis aliquid eligendi cupiditate asperiores expedita tempore quia suscipit ipsum molestiae aspernatur animi sapiente maiores voluptates itaque laudantium facere perspiciatis, consequuntur temporibus corrupti. Inventore perspiciatis in soluta placeat atque ab ipsam ut eveniet cupiditate sequi, earum eum ea aperiam culpa recusandae cumque beatae nisi, quam amet dolorem! Assumenda voluptas iure error accusamus velit alias distinctio eius aut voluptatibus! Sunt veniam nisi ipsum debitis, beatae harum iusto suscipit architecto quas amet nihil numquam aut recusandae, nulla fuga doloribus iure. Soluta!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Second Post',
        //     'slug' => 'second-post',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea eos modi animi id tempore quibusdam, culpa repellendus',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea eos modi animi id tempore quibusdam, culpa repellendus obcaecati sed distinctio. Vel blanditiis aliquid eligendi cupiditate asperiores expedita tempore quia suscipit ipsum molestiae aspernatur animi sapiente maiores voluptates itaque laudantium facere perspiciatis, consequuntur temporibus corrupti. Inventore perspiciatis in soluta placeat atque ab ipsam ut eveniet cupiditate sequi, earum eum ea aperiam culpa recusandae cumque beatae nisi, quam amet dolorem! Assumenda voluptas iure error accusamus velit alias distinctio eius aut voluptatibus! Sunt veniam nisi ipsum debitis, beatae harum iusto suscipit architecto quas amet nihil numquam aut recusandae, nulla fuga doloribus iure. Soluta!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
