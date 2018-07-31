<?php

class CreatePostTest extends FeatureTestCase
{
   function test_a_user_create_a_post(){
       //Having
        $this->ActingAs($user = $this->defaultUser());

        //When
        $this->visit(route('post.create'))
            ->type('Esta es una pregunta','title')
            ->type('Este es el contenido', 'content')
            ->press('publicar');
        
        /* Verificamos si fue registrado en la base de datos */
        // Then
        $this->seeInDatabase('posts', [
            'title' => 'Esta es una pregunta',
            'content' => 'Este es el contenido',
            'pending' => true,
            'user_id' => $user->id,
        ]);
        // Test a user is redirected to the posts details after creating it.
        $this->see('Esta es una pregunta');
   }
}
