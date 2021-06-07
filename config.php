<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => 'http://localhost:3000',
    'siteName' => "Tomorrow's Warehouse",
    'siteDescription' => "Tomorrow's Warehouse is a one-day, free-to attend conference tackling operational challenges in warehousing and logistics at a time of unprecedented transformation.",
    'registrationURL' => 'https://form.jotform.com/211403691045346',
    'selected' => function ($page, $section) {
        return Str::contains($page->getPath(), $section) ? 'selected' : '';
    },
    'resourcePath' => function ($page, $resourcePath){
    	return trim($page->baseUrl, '/') . $resourcePath;
    },
    'collections' => [
        'exhibitors' => [
            'exhibitor' => 'Exhibitor Name', // Default exhibitor name, if not provided in an exhibitor profile
            'sort' => 'name',
            'path' => 'exhibitors/{filename}',
        ],
    ],
];
