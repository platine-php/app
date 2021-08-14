<?php

use Platine\Framework\Template\Tag\CurrentUrlTag;
use Platine\Framework\Template\Tag\StaticTag;

    return [
        'cache_expire' => 5600,
        'cache_dir' => __DIR__ . '/../storage/cache',
        'cache_prefix' => '__platine_template',
        'template_dir' => __DIR__ . '/../storage/resource/templates',
        'file_extension' => 'html',
        'auto_escape' => true,
        'filters' => [],
        'tags' => [
            'static' => StaticTag::class,
            'current_url' => CurrentUrlTag::class,
        ],
    ];
