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
    @include('frontend.partials.style')
    
  </head>
  <body>