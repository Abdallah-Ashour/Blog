<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class CatogariesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
            'title' => 'Web Design',
            'slug' => 'web-design'
            ],
            [
                'title' => 'Web programming',
                'slug' => 'web-web programming'
            ],
            [
                'title' => 'Internet',
                'slug' => 'internet'
            ],
            [
                'title' => 'Social Marketing',
                'slug' => 'social-marketing'
            ],
            [
                'title' => 'photography',
                'slug' => 'photography'
            ],
        ]);

        // for($post_id = 1; $post_id <= 10; $post_id++){
        //     $category_id = rand(1, 5);
        //     Post::where('id', $post_id)->update(['category_id' => $category_id]);
        // }
    } // end of run
}
