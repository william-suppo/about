<?php

namespace App\Services;

use DOMDocument;
use Exception;
use Illuminate\Cache\Repository as Cache;
use Illuminate\Config\Repository as Config;
use Illuminate\Http\Client\Factory;

class PostRepository
{
    public function __construct(
        private Cache   $cache,
        private Config  $config,
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
                    'publishedAt' => $item->getElementsByTagName('pubDate')->item(0)->nodeValue,
                    'image' => $item->getElementsByTagName('enclosure')->item(0)->getAttribute('url'),
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
                $this->config->get('services.lfr.url'),
                [
                    'author' => $this->config->get('services.lfr.author'),
                    'limit' => $this->config->get('services.lfr.limit')
                ],
            );

            $response->throw();

            return $response->body();
        } catch (Exception $e) {
            return '';
        }
    }
}
