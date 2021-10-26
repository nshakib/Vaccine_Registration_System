/**
 * @Author: Md Nazmus Shakib
 * @Date:   2021-10-20 09:48:30
 * @Last Modified by:   Md Nazmus Shakib
 * @Last Modified time: 2021-10-26 00:20:40
 */
const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js("resources/js/app.js", "public/js").postCss(
    "resources/css/app.css",
    "public/css",
    [require("tailwindcss")]
);
