<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Rules
    |--------------------------------------------------------------------------
    |
    | Additional rules, to do your own cleanups
    |
    */
    'rules' => [
        'propaganistas/laravel-phone' => [
            'ISSUE_TEMPLATE*',
        ],
        'prettus/l5-repository' => [
            'migration-to-*.md',
        ],
        'theseer/tokenizer' => [
            'build.xml',
            'phive.xml',
        ],
        'phpoffice/phpspreadsheet' => [
            'samples',
            '.github',
        ],
        'zendframework/zend-diactoros' => [
            'mkdocs.yml',
        ],
        'league/flysystem' => [
            'deprecations.md',
        ],
    ],
];
