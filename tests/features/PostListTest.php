<?php

class PostListTest extends FeatureTestCase
{
    function test_a_user_can_see_the_post_list_and_go_to_the_details()
    {
        $post = factory(App\Post::class)->create([
            'title' => '¿Debo usar laravel 5.3 o 5.1 LTS?'
        ]);
        $this->visit('/')
            ->seeInElement('h1','Post')
            ->see($post->title)
            ->click($post->title)
            ->seePageIs($post->url);
    }
}
