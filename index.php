<?php

$test = defined('TEST') && TEST;

// Load `index.css` and `index.js` to the page. If test mode is off, it will load `index.min.css` and `index.min.js`
if (isset($state->x->asset)) {
    Asset::set(__DIR__ . D . 'index' . ($test ? '.' : '.min.') . 'css');
    Asset::set(__DIR__ . D . 'index' . ($test ? '.' : '.min.') . 'js');
}

// Load `test.php` file if `TEST` value is `'x.{name}'`
if ($test && 'x.' . basename(__DIR__) === TEST && is_file($test = __DIR__ . D . 'test.php')) {
    require $test;
}