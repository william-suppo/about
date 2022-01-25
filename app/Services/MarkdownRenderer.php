<?php

namespace App\Services;

use League\CommonMark\MarkdownConverter;
use League\CommonMark\Output\RenderedContentInterface;

class MarkdownRenderer
{
    public function __construct(private MarkdownConverter $converter) {}

    public function render(string $markdown): RenderedContentInterface
    {
        return $this->converter->convert($markdown);
    }
}
