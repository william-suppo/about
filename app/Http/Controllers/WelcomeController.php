<?php

namespace App\Http\Controllers;

use App\Services\MarkdownRenderer;
use Exception;
use Illuminate\Contracts\Cache\Repository as Cache;
use Illuminate\Contracts\Config\Repository as Config;
use Illuminate\Http\Client\Factory;

class WelcomeController extends Controller
{
    public function __construct(
        private MarkdownRenderer $markdown,
        private Cache $cache,
        private Config $config,
        private Factory $http,
    ) {}

    public function __invoke()
    {
        $content = $this->markdown->render(
            $this->getCachedContent()
        );

        return view('welcome', ['content' => $content]);
    }

    protected function getCachedContent(): string
    {
        return $this->cache->remember('bio', now()->addMinutes(15), function () {
            try {
                $response = $this->http->get(
                    $this->config->get('services.bio')
                );

                $response->throw();

                return $response->body();
            } catch (Exception $e) {
                return "### Oups, j'ai perdu ma bio... je vais chercher ma 🧰 et un ☕";
            }
        });
    }
}
