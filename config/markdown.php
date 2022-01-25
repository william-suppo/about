<?php

use League\CommonMark\Extension\CommonMark\Node\Block\Heading;
use League\CommonMark\Extension\CommonMark\Node\Block\ListBlock;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;
use League\CommonMark\Extension\CommonMark\Node\Inline\Link;
use League\CommonMark\Node\Block\Paragraph;

return [

    'default_attributes' => [
        Heading::class => [
            'class' => static function (Heading $node) {
                return 'heading-' . $node->getLevel();
            },
        ],

        Paragraph::class => [
            'class' => 'paragraph',
        ],

        Code::class => [
            'class' => 'code',
        ],

        ListBlock::class => [
            'class' => static function (ListBlock $node) {
                if ($node->getListData()->type === ListBlock::TYPE_ORDERED) {
                    return 'list-block-ordered';
                }

                return 'list-block';
            },
        ],

        Link::class => [
            'class' => 'hyperlink',
        ],
    ],

];
