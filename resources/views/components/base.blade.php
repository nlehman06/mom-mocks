@props(['title' => config('app.name')])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>{{ $title }}</title>
   <link rel="icon" href="/favicon.ico?v=2" />
   <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

   <!-- Fonts -->
   <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

   <!-- Styles -->
   <link rel="stylesheet" href="{{ mix('css/app.css') }}">
   @livewireStyles

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <style>
      [x-cloak] {
         display: none;
      }
   </style>
</head>

<body>
   {{ $slot }}

   <script src="{{ mix('js/app.js') }}"></script>
   @livewireScripts
</body>

</html>