<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>{{ config('app.name', 'LSAPP') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        @include('inc.navbar')

        <section class="container">
            @include('inc.messages')

            @yield('content')
        </section>

        <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
        <script>
            const editor = document.querySelector('#editor')

            if (editor) {
                ClassicEditor
                .create(document.querySelector('#editor'))
            }                                          
        </script>
    </body>
</html>
