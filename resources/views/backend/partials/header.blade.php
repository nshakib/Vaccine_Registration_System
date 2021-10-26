<?php
/**
 * @Author: Md Nazmus Shakib
 * @Date:   2021-10-25 23:33:12
 * @Last Modified by:   Md Nazmus Shakib
 * @Last Modified time: 2021-10-26 00:40:31
 */
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Vaccine Registration System | @yield('title')</title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="author" content="@yield('meta_author', 'Nazmus Shakib')">
    @yield('meta')
    @include('backend.partials.style')

  </head>
  <body class="bg-gray-800 font-sans leading-normal tracking-normal mt-12">
