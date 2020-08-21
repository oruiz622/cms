<?php

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag1 = Tag::create([
            'name' => 'Record'
        ]);
        $tag2 = Tag::create([
            'name' => 'Progress'
        ]);
        $tag3 = Tag::create([
            'name' => 'Customers'
        ]);
        $tag4 = Tag::create([
            'name' => 'Freebie'
        ]);
        $tag5 = Tag::create([
            'name' => 'Offer'
        ]);
        $tag6 = Tag::create([
            'name' => 'Screenshot'
        ]);
        $tag7 = Tag::create([
            'name' => 'Milestone'
        ]);
        $tag8 = Tag::create([
            'name' => 'Version'
        ]);
        $tag9 = Tag::create([
            'name' => 'Design'
        ]);
        $tag10 = Tag::create([
            'name' => 'Job'
        ]);

        $category1 = Category::create([
            'name' => 'News',
        ]);

        $post1 = Post::create([
            'title' => 'We located our office to a new designed garage',
            'description' => 'Consequat before they sold out ipsum, literally heirloom viral et irure semiotics post-ironic franzen meggings. YOLO cold-pressed street art reprehenderit, taxidermy ad occaecat consectetur.',
            'content' => 'Cliche cloud bread ea snackwave blue bottle exercitation schlitz',
            'category_id' => $category1->id,
            'image' => 'posts/bg/13.jpg'
        ]);

        $category2 = Category::create([
            'name' => 'Marketing',
        ]);

        $post2 = Post::create([
            'title' => 'Top 5 brilliant content marketing strategies',
            'description' => 'Consequat before they sold out ipsum, literally heirloom viral et irure semiotics post-ironic franzen meggings. YOLO cold-pressed street art reprehenderit, taxidermy ad occaecat consectetur.',
            'content' => 'Cliche cloud bread ea snackwave blue bottle exercitation schlitz',
            'category_id' => $category2->id,
            'image' => 'posts/bg/2.jpg'
        ]);

        $category3 = Category::create([
            'name' => 'Design',
        ]);

        $post3 = Post::create([
            'title' => 'Best practices for minimalist design with example',
            'description' => 'Consequat before they sold out ipsum, literally heirloom viral et irure semiotics post-ironic franzen meggings. YOLO cold-pressed street art reprehenderit, taxidermy ad occaecat consectetur.',
            'content' => 'Cliche cloud bread ea snackwave blue bottle exercitation schlitz',
            'category_id' => $category3->id,
            'image' => 'posts/bg/9.jpg'
        ]);

        $category4 = Category::create([
            'name' => 'Hiring',
        ]);

        $post4 = Post::create([
            'title' => 'Congratulate and thank to Maryam for joining our team',
            'description' => 'Consequat before they sold out ipsum, literally heirloom viral et irure semiotics post-ironic franzen meggings. YOLO cold-pressed street art reprehenderit, taxidermy ad occaecat consectetur.',
            'content' => 'Cliche cloud bread ea snackwave blue bottle exercitation schlitz',
            'category_id' => $category4->id,
            'image' => 'posts/bg/14.jpg'
        ]);

        $category5 = Category::create([
            'name' => 'Product',
        ]);

        $post5 = Post::create([
            'title' => 'New published books to read by a product designer',
            'description' => 'Consequat before they sold out ipsum, literally heirloom viral et irure semiotics post-ironic franzen meggings. YOLO cold-pressed street art reprehenderit, taxidermy ad occaecat consectetur.',
            'content' => 'Cliche cloud bread ea snackwave blue bottle exercitation schlitz',
            'category_id' => $category5->id,
            'image' => 'posts/bg/1.jpg'
        ]);

        $category6 = Category::create([
            'name' => 'Management',
        ]);

        $post6 = Post::create([
            'title' => "This is why it's time to ditch dress codes at work",
            'description' => 'Consequat before they sold out ipsum, literally heirloom viral et irure semiotics post-ironic franzen meggings. YOLO cold-pressed street art reprehenderit, taxidermy ad occaecat consectetur.',
            'content' => 'Cliche cloud bread ea snackwave blue bottle exercitation schlitz',
            'category_id' => $category6->id,
            'image' => 'posts/bg/11.jpg'
        ]);

        $post1->tags()->attach([$tag1->id, $tag2->id]);
        $post2->tags()->attach([$tag10->id, $tag4->id]);
        $post3->tags()->attach([$tag3->id, $tag9->id]);
        $post4->tags()->attach([$tag8->id, $tag6->id, $tag2->id]);
        $post5->tags()->attach([$tag7->id, $tag5->id]);
        $post6->tags()->attach([$tag6->id, $tag2->id]);
    }
}
