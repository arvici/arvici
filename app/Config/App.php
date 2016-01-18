<?php

use Arvici\Heart\Config\Configuration as Configure;

/**
 * Config: app
 */
Configure::define('app', function ($config) {
    return [

        /**
         * Application Environment
         * This will affect several components of the framework, such as Logging and showing errors.
         *
         * You can set this to:
         *      - production      => No errors, exceptions are shown, all logged to log files.
         *      - development     => All errors, exceptions etc are thrown and showed in pages.
         */
        'env' => 'production',


        /**
         * Base URL
         * Fill in the base url, in this location the public/ should be mapped.
         * Make sure you don't put a slash after the url!
         */
        'url' => 'http://localhost:8080',


        /**
         * Time Zone
         * The php timezone.
         * Could be 'UTC' too.
         *
         * @see http://php.net/manual/en/timezones.php
         */
        'timezone' => 'Europe/Amsterdam',


        /**
         * Default locale
         * default used by the translation engine or when not using it will only be used
         * in the template html tag, and debugging.
         */
        'locale' => 'en',


        /**
         * Private Secret Key
         * Will be used for several security related tasks.
         * Should be random!
         */
        'private_key' => 'J7a6dhaA&*dhgAfhjkHJv*78gja8gjKg89(*Sf',


        /**
         * Services to load
         * @todo: implementing service loading and interface
         */
        'services' => [

        ],
    ];
});
