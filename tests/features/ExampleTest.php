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
        $user = $this->defaultUser();

        $this->actingAs($user, 'api')
             ->visit('api/user')
             ->see('Ismael Lastre Alvarez')
             ->see('ismaelfac1@gmail.com');
    }
}
