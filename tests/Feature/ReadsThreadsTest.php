<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ReadsThreadsTest extends TestCase
{

    private $thread;

    public function setUp()
    {
        parent::setUp();

        $this->thread = factory('App\Thread')->create();
    }

    /** @test */
    public function a_user_can_view_all_threads()
    {
        $response = $this->get('/');

        $response->assertSee($this->thread->title)
            ->assertStatus(200);
    }

    /** @test */
    public function a_user_can_read_a_single_thread()
    {
        $response = $this->get('threads/' . $this->thread->id);
        $response->assertSee($this->thread->title);
    }
}
