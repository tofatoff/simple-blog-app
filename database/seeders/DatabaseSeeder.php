<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        User::create([
            'name' => 'Lorem Ipsum',
            'username' => 'lipsum',
            'email' => 'lorem@ipsum.com',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'Ipsum Dolor',
            'username' => 'iplor',
            'email' => 'ipsum@dolor.com',
            'password' => bcrypt('12345')
        ]);
        User::factory(7)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => 'Entertainment',
            'slug' => 'entertainment'
        ]);

        Post::factory(7)->create();
        // Post::create([
        //     'title'=>'First post',
        //     'slug'=>'first-post',
        //     'excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ipsum dolorum iste numquam illum explicabo itaque voluptates velit.',
        //     'body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ipsum dolorum iste numquam illum explicabo itaque voluptates velit. Et dignissimos, laboriosam culpa distinctio odit, vero obcaecati dolorum numquam tempore veniam quas aperiam consectetur unde minima voluptatum error quasi totam! Non sunt, esse doloremque ab amet magni!</p> <p>Explicabo odit, voluptates reprehenderit cumque iusto eaque soluta sint provident aliquid mollitia corrupti, enim ea quasi delectus quo alias adipisci sed ducimus neque nihil, cum sequi! Vel, esse saepe, voluptates aspernatur molestiae possimus dolorum assumenda est repudiandae doloremque architecto asperiores veritatis perferendis nesciunt cum minima. Eius illo iusto aut vero, beatae eaque quae corporis?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title'=>'Second post',
        //     'slug'=>'second-post',
        //     'excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ipsum dolorum iste numquam illum explicabo itaque voluptates velit.',
        //     'body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ipsum dolorum iste numquam illum explicabo itaque voluptates velit. Et dignissimos, laboriosam culpa distinctio odit, vero obcaecati dolorum numquam tempore veniam quas aperiam consectetur unde minima voluptatum error quasi totam! Non sunt, esse doloremque ab amet magni!</p> <p>Explicabo odit, voluptates reprehenderit cumque iusto eaque soluta sint provident aliquid mollitia corrupti, enim ea quasi delectus quo alias adipisci sed ducimus neque nihil, cum sequi! Vel, esse saepe, voluptates aspernatur molestiae possimus dolorum assumenda est repudiandae doloremque architecto asperiores veritatis perferendis nesciunt cum minima. Eius illo iusto aut vero, beatae eaque quae corporis?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title'=>'Third post',
        //     'slug'=>'third-post',
        //     'excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ipsum dolorum iste numquam illum explicabo itaque voluptates velit.',
        //     'body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis ipsum dolorum iste numquam illum explicabo itaque voluptates velit. Et dignissimos, laboriosam culpa distinctio odit, vero obcaecati dolorum numquam tempore veniam quas aperiam consectetur unde minima voluptatum error quasi totam! Non sunt, esse doloremque ab amet magni!</p> <p>Explicabo odit, voluptates reprehenderit cumque iusto eaque soluta sint provident aliquid mollitia corrupti, enim ea quasi delectus quo alias adipisci sed ducimus neque nihil, cum sequi! Vel, esse saepe, voluptates aspernatur molestiae possimus dolorum assumenda est repudiandae doloremque architecto asperiores veritatis perferendis nesciunt cum minima. Eius illo iusto aut vero, beatae eaque quae corporis?</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
