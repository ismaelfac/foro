<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
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
