<?php

/**
 * Returns the importmap for this application.
 *
 * - "path" is a path inside the asset mapper system. Use the
 *     "debug:asset-map" command to see the full list of paths.
 *
 * - "entrypoint" (JavaScript only) set to true for any module that will
 *     be used as an "entrypoint" (and passed to the importmap() Twig function).
 *
 * The "importmap:require" command can be used to add new entries to this file.
 */
return [
    'app' => [
        'path' => './assets/app.js',
        'entrypoint' => true,
    ],
    '@symfony/stimulus-bundle' => [
        'path' => './vendor/symfony/stimulus-bundle/assets/dist/loader.js',
    ],
    '@hotwired/stimulus' => [
        'version' => '3.2.2',
    ],
    '@hotwired/turbo' => [
        'version' => '8.0.20',
    ],
    'simpledotcss' => [
        'version' => '2.3.7',
    ],
    '@37signals/lexxy' => [
        'version' => '0.1.20-beta',
    ],
    'dompurify' => [
        'version' => '3.3.0',
    ],
    'lexical' => [
        'version' => '0.38.2',
    ],
    '@lexical/list' => [
        'version' => '0.38.2',
    ],
    '@lexical/rich-text' => [
        'version' => '0.38.2',
    ],
    '@lexical/code' => [
        'version' => '0.38.2',
    ],
    '@lexical/link' => [
        'version' => '0.38.2',
    ],
    '@lexical/html' => [
        'version' => '0.38.2',
    ],
    '@lexical/markdown' => [
        'version' => '0.38.2',
    ],
    '@lexical/history' => [
        'version' => '0.38.2',
    ],
    '@rails/activestorage' => [
        'version' => '8.1.100',
    ],
    'marked' => [
        'version' => '17.0.0',
    ],
    'prismjs/components/prism-ruby' => [
        'version' => '1.30.0',
    ],
    '@lexical/extension' => [
        'version' => '0.38.2',
    ],
    '@lexical/utils' => [
        'version' => '0.38.2',
    ],
    '@lexical/selection' => [
        'version' => '0.38.2',
    ],
    '@lexical/clipboard' => [
        'version' => '0.38.2',
    ],
    '@lexical/dragon' => [
        'version' => '0.38.2',
    ],
    'prismjs' => [
        'version' => '1.30.0',
    ],
    'prismjs/components/prism-clike.js' => [
        'version' => '1.30.0',
    ],
    'prismjs/components/prism-javascript.js' => [
        'version' => '1.30.0',
    ],
    'prismjs/components/prism-markup.js' => [
        'version' => '1.30.0',
    ],
    'prismjs/components/prism-markdown.js' => [
        'version' => '1.30.0',
    ],
    'prismjs/components/prism-c.js' => [
        'version' => '1.30.0',
    ],
    'prismjs/components/prism-css.js' => [
        'version' => '1.30.0',
    ],
    'prismjs/components/prism-objectivec.js' => [
        'version' => '1.30.0',
    ],
    'prismjs/components/prism-sql.js' => [
        'version' => '1.30.0',
    ],
    'prismjs/components/prism-powershell.js' => [
        'version' => '1.30.0',
    ],
    'prismjs/components/prism-python.js' => [
        'version' => '1.30.0',
    ],
    'prismjs/components/prism-rust.js' => [
        'version' => '1.30.0',
    ],
    'prismjs/components/prism-swift.js' => [
        'version' => '1.30.0',
    ],
    'prismjs/components/prism-typescript.js' => [
        'version' => '1.30.0',
    ],
    'prismjs/components/prism-java.js' => [
        'version' => '1.30.0',
    ],
    'prismjs/components/prism-cpp.js' => [
        'version' => '1.30.0',
    ],
    'prismjs/themes/prism.min.css' => [
        'version' => '1.30.0',
        'type' => 'css',
    ],
    'simpledotcss/simple.min.css' => [
        'version' => '2.3.7',
        'type' => 'css',
    ],
];
