<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Wizard Fun</title>
        <script src="{{ mix('js/app.js') }}" defer></script>
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        @livewireStyles
    </head>
    <body >
    <div class="w-full mt-1 px-3 mb-2 border-b-2 border-gray-300 flex flex-row justify-between items-end">
        <img src="{{ asset('images/wizard.png') }}"  style="height:100px;padding-bottom:5px;">
    </div>
    <div class="antialiased p-2 mx-auto max-w-xl">
        {{$slot}}
    </div>
    @livewireScripts
    </body>
</html>
