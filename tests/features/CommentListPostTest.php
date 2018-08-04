<?php


class CommentListPostTest extends FeatureTestCase
{
    function test_a_user_can_see_the_comments_list_of_a_post()
    {
        //Having
            
        //When
        //Crear el post
            $post = factory(App\Post::class)->create();
            //Listar los comentarios del post
            $comments = factory(App\Comment::class)->create([
                'post_id' => $post->id
            ]);
            //dd($post);
            
        //Then
            $this->visit($post->url)
                ->seeInElement('h4','Comentarios del Post')
                ->assertResponseStatus(200)
                ->see($comments->comment);
    }
}
