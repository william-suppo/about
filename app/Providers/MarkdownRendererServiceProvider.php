<?php

namespace App\Providers;

use App\Services\MarkdownRenderer;
use Illuminate\Support\ServiceProvider;
use League\CommonMark\Environment\Environment;
use League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;
use League\CommonMark\Extension\DefaultAttributes\DefaultAttributesExtension;
use League\CommonMark\Extension\GithubFlavoredMarkdownExtension;
use League\CommonMark\MarkdownConverter;

class MarkdownRendererServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(MarkdownRenderer::class, function ($app) {
            $config = $app['config']->get('markdown');

            $environment = new Environment($config);
            $environment->addExtension(new CommonMarkCoreExtension());
            $environment->addExtension(new DefaultAttributesExtension());
            $environment->addExtension(new GithubFlavoredMarkdownExtension());

            $markdownConverter = new MarkdownConverter($environment);

            return new MarkdownRenderer($markdownConverter);
        });
    }
}
