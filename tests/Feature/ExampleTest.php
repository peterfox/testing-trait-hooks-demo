<?php

namespace Tests\Feature;

use Tests\Support\Authentication;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    use RefreshDatabase, Authentication;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->authenticated()
            ->get('/home')
            ->assertOk()
            ->assertSeeText($this->user->name);
    }
}
