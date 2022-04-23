<?php

namespace App\Http\Controllers;

use App\Services\PostRepository;

class WelcomeController extends Controller
{
    public function __construct(
        private PostRepository $postRepository,
    ) {}

    public function __invoke()
    {
        $posts = $this->postRepository->all();

        return view('welcome', ['posts' => $posts]);
    }
}
