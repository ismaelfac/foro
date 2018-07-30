<?php

class ExampleTest extends FeatureTestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    function test_basic_example()
    {
        $user = factory(App\User::class)->create([
            'name' => 'dsfr Martiens',
            'email' => 'sfe@gmail.com'
        ]);

        $this->actingAs($user, 'api')
             ->visit('api/user')
             ->see('dsfr Martiens')
             ->see('sfe@gmail.com');
    }
}
