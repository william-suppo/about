<?php

namespace App\Services;

use DOMDocument;
use Exception;
use Illuminate\Cache\Repository;
use Illuminate\Http\Client\Factory;

class PostRepository
{
    public function __construct(
        private Repository $cache,
        private Factory $http,
    ) {}

    /**
     * @return \App\Services\Post[]
     */
    public function all(): array
    {
        $response = $this->cache->remember('posts', now()->addMinutes(15), function () {
            return $this->fetchPosts();
        });

        try {
            $dom = new DOMDocument();

            $dom->loadXML($response);

            $items = $dom->getElementsByTagName('item');

            $posts = [];

            foreach ($items as $item) {
                $posts[] = new Post([
                    'title' => $item->getElementsByTagName('title')->item(0)->nodeValue,
                    'description' => $item->getElementsByTagName('description')->item(0)->nodeValue,
                    'link' => $item->getElementsByTagName('link')->item(0)->nodeValue,
                    'pubDate' => $item->getElementsByTagName('pubDate')->item(0)->nodeValue,
                    'image' => 'https://picsum.photos/id/103/275/144',
                ]);
            }

            return $posts;
        } catch (Exception $e) {
            return [];
        }
    }

    protected function fetchPosts(): string
    {
        try {
            $response = $this->http->get(
                'https://laravel-france.com/rss?author=William&limit=5'
            );

            $response->throw();

            return $response->body();
        } catch (Exception $e) {
            return '';
        }
    }
}
