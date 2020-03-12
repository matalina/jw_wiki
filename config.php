<?php

return [
    'production' => false,
    'baseUrl' => 'http://localhost:8000',
    'title' => 'AJ Hunter',
    'description' => 'web developer by day, parent by night, writer in between',
    'collections' => [
        'wiki' => [
            'sort' => 'title',
        ],
        /*'category' => [
            'wiki' => function ($page, $allWiki) {
                return $allWiki->filter(function ($wiki) use ($page) {
                    return $wiki->category ? in_array($page->getFilename(), $wiki->categories, true) : false;
                });
            },
        ],
        'tag' => [
            'wiki' => function ($page, $allWiki) {
                return $allWiki->filter(function ($wiki) use ($page) {
                    return $wiki->tag ? in_array($page->getFilename(), $wiki->categories, true) : false;
                });
            },
        ]*/
    ],
];
