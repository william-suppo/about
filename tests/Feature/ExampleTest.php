<?php

namespace Tests\Feature;

use App\Services\Post;
use App\Services\PostRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->mock(PostRepository::class, function ($mock) {
            $mock->shouldReceive('all')->andReturn([
                new Post([
                    'title' => 'Hello world',
                    'description' => 'Bla bla bla',
                    'publishedAt' => 'Sun, 17 Apr 2022 08:25:38 GMT',
                    'image' => 'https://storage.null/pic.jpg',
                    'link' => 'https://news.null/hello-world',
                ]),
            ]);
        });

        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
