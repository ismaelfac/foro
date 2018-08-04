<?php
use \Carbon\Carbon;

class PostListTest extends FeatureTestCase
{
    function test_a_user_can_see_the_post_list_and_go_to_the_details()
    {
        $post = factory(App\Post::class)->create([
            'title' => '¿Debo usar laravel 5.3 o 5.1 LTS?'
        ]);
        $this->visit('/')
            ->seeInElement('h1','Post')
            ->seeInElement('li',$post->title)
            ->click($post->title)
            ->seePageIs($post->url);
    }
    function test_the_post_are_paginated()
    {
        //Having
        $first = factory(App\Post::class)->create([
            'title' => 'El post mas antiguo',
            'created_at' => Carbon::now()->subDays(2) //me inserta los post 2 dias antes
        ]);
        
        factory(App\Post::class)->times(15)->create([
            'created_at' => Carbon::now()->subDay()
        ]);
        
        $last = factory(App\Post::class)->create([
            'title' => 'El post mas reciente',
            'created_at' => Carbon::now()
        ]);
        //dd($first->toArray(), $last->toArray());
        //When
        $this->visit('/')
            ->See($last->title)
            ->dontSee($first->title)
            ->click('2')
            ->see($first->title)
            ->dontSee($last->title);

    }
}
