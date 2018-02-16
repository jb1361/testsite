<?php
/**
 * Version: 0.0.1
 * Notice: WARNING. DO NOT EDIT THIS FILE.
 * USE OOP DESIGN PATTERN BY ADDING FILES TO FRAMEWORK IN SRC DIRECTORY
 */

/**
 * The post type prefix for this theme
 */
$postTypePrefix = "lgef";

/**
 * Load the application
 */
require_once("vendor/autoload.php");

/**
 * Bootstrap the application
 */

$app = new \LouisvilleGeek\EnfoldChild\Application(
    wp_get_theme()->get('Version'),
    dirname(__FILE__) . DIRECTORY_SEPARATOR,
    get_stylesheet_directory_uri() . '/',
    dirname(__FILE__) . DIRECTORY_SEPARATOR . "style.css",
    [
        // add service providers here
    ],
    str_replace("-", "_", basename(dirname(__FILE__))),
    $postTypePrefix,
    wp_get_theme()->get('TextDomain')
);
$app->bootstrap();

