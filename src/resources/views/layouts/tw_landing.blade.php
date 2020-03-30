<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title','Page Title') &bull; @yield('site_title',env('APP_NAME'))</title>
    <meta name="description" content="@yield('page_description','Page Description')">
    <meta name="keywords" content="@yield('page_keywords')">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css">
    <link rel="stylesheet" href="/css/print.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">
    <style>
        .gradient {
            background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
        }
    </style>
</head>
<body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">

@include("partials.nav")

@yield("page_body",'Page Body')

@include("partials.footer")
@include("partials.scripts")

</body>

</html>
