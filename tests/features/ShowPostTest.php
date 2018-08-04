<?php

class ShowPostTest extends FeatureTestCase
{
    function test_a_user_can_see_the_post_details()
    {
        // Having
        $post = factory(\App\Post::class)->create([
            'title' => 'Este es el titulo del post',
            'content' => 'Este es el contenido del post'
        ]);
        // When
        $this->visit($post->url)
            ->seeInElement('h1', $post->title)
            ->see($post->content);
    }

    function test_old_urls_are_redirected()
    {
        //Having
        $user = $this->defaultUser();
        //When
        $post = factory(App\Post::class)->create([
            'title' => 'Old Title'
        ]);
        $user->posts()->save($post);
        $url = $post->url;
        $post->update(['title' => 'New title']);
        //Then
        $this->visit($url)
             ->assertResponseOk()
            ->seePageIs($post->url);
        
    }
}