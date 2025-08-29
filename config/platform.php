<?php
    declare(strict_types=1);
    
    $dataPath = __DIR__ . '/../storage/data/';
    
    return [
        'data_path' => env('PL_PLATFORM_DATA_DIR', $dataPath),
        'data_image_path' => env('PL_PLATFORM_DATA_IMAGE_DIR', $dataPath . 'images'),
        'data_attachment_path' => env('PL_PLATFORM_DATA_ATTACHMENT_DIR', $dataPath . 'attachments'),
        'data_print_path' => env('PL_PLATFORM_DATA_PRINT_DIR', $dataPath . 'prints'),
        'data_temp_path' => env('PL_PLATFORM_DATA_TEMP_DIR', $dataPath . 'tmp'),
        'public_image_path' => 'static/images',
        'cache_print_report_content' => env('PL_PLATFORM_CACHE_PRINT_REPORT_CONTENT', false),
        'report_debug_path' => env('PL_PLATFORM_REPORT_DEBUG_PATH', null), // null to disable it
        'sidebar_color_scheme' => 'primary',
    ];
