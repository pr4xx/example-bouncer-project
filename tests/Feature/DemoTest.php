<?php

namespace Tests\Feature;
use App\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use DB;

class DemoTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * @return void
     */
    public function testBouncerFailingWithMultipleTests_1()
    {
        $this->assertTrue(true);

        $user = User::first();

        // This will work
        $abilities = $user->getAbilities()->toArray();
        $this->assertNotEmpty($abilities, 'No abilities for this user!');
    }

    /**
     * @return void
     */
    public function testBouncerFailingWithMultipleTests_2()
    {
        $this->assertTrue(true);

        $user = User::first();

        // This will _NOT_ work (it is the same code!)
        $abilities = $user->getAbilities()->toArray();
        $this->assertNotEmpty($abilities, 'No abilities for this user!');
    }
}
