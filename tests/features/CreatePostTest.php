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
   function test_creating_a_post_requires_authentication(){
       $this->visit(route('post.create'))
            ->seePageIs(route('login'));
   }
   function test_create_post_form_validation()
    {
        $this->actingAs($this->defaultUser())
            ->visit(route('post.create'))
            ->press('publicar')
            ->seePageIs(route('post.create'))
            ->seeErrors([
                'title' => 'El campo título es obligatorio',
                'content' => 'El campo contenido es obligatorio'
            ]);
    }
}