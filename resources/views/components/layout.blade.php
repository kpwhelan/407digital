@props([
    'title' => '407 Digital',
    'description' => 'Websites and practical software for contractors and local service businesses.',
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1"
        >

        <title>{{ $title }}</title>

        <meta
            name="description"
            content="{{ $description }}"
        >

        <meta
            name="robots"
            content="index, follow"
        >

        <link
            rel="canonical"
            href="{{ url()->current() }}"
        >

        <meta
            property="og:title"
            content="{{ $title }}"
        >

        <meta
            property="og:description"
            content="{{ $description }}"
        >

        <meta
            property="og:type"
            content="website"
        >

        <meta
            property="og:url"
            content="{{ url()->current() }}"
        >

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>

    <body>
        <x-navigation />

        <main>
            {{ $slot }}
        </main>

        <x-footer />

        @livewireScripts
    </body>
</html>
