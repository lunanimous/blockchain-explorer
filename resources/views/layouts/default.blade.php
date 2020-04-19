<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title') - Lunanimous</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="font-sans bg-gray-100 text-teal-900">
    <header class="p-4 mb-6">
        <div class="container mx-auto">
            <div class="flex items-center">
                <div class="flex-1 flex items-center">
                    <img class="h-16 w-auto pb-2 mr-4" src="{{ asset('images/lunanimous-no-text.svg') }}" />
                    <h1 class="text-xl text-gray-600">Blockchain Explorer</h1>
                </div>

                <div class="flex-1 flex justify-end -mx-1">
                    <div class="p-1">
                        <a href="#" class="py-2 px-3 text-gray-600 hover:bg-gray-200 hover:text-gray-700 rounded-md">Blocks</a>
                    </div>
                    <div class="p-1">
                        <a href="#" class="py-2 px-3 text-gray-600 hover:bg-gray-200 hover:text-gray-700 rounded-md">Transactions</a>
                    </div>
                    <div class="p-1">
                        <a href="#" class="py-2 px-3 text-gray-600 hover:bg-gray-200 hover:text-gray-700 rounded-md">Accounts</a>
                    </div>
                    <div class="p-1">
                        <a href="#" class="py-2 px-3 text-gray-600 hover:bg-gray-200 hover:text-gray-700 rounded-md">Charts</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container mx-auto">
            @yield('content')
        </div>
    </main>

    <footer class="mt-12">
        <div class="container mx-auto text-center">
            <a href="https://lunanimous.github.io" title="lunanimous" target="_blank" class="inline-block opacity-50 hover:opacity-100">
                <img src="{{ asset('images/lunanimous-logo.svg') }}" class="h-8 w-auto"/>
            </a>

            <p class="mt-3 text-center text-sm text-gray-500">Made by © lunanimous. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
