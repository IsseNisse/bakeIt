<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>BakeIt</title>
</head>
<body>
    <nav class="flex items-center justify-between flex-wrap p-6 border-b-2 border-pink-600">
        <div class="flex items-center flex-shrink-0 text-black mr-6">
            <h1 class="text-4xl">BakeIt</h1>
        </div>

        <div class="flex font-medium">
            <div class="w-full block sm:flex sm:items-center sm:w-auto">
                <div class="text-lg sm:flex-grow">
                    <a href="/" class="block mt-4 sm:inline-block sm:mt-0 text-teal-200 mr-4 border-b-2 border-transparent hover:border-pink-600 {{ Request::is('/') ? 'border-b-2 border-pink-600' : '' }}">Home</a>
                </div>
            </div>
            <div class="w-full block sm:flex sm:items-center sm:w-auto">
                <div class="text-lg sm:flex-grow">
                    <a href="#" class="block mt-4 sm:inline-block sm:mt-0 text-teal-200 mr-4 border-b-2 border-transparent hover:border-pink-600 {{ Request::is('/blogg') ? 'border-b-2 border-pink-600' : '' }}">Blogg</a>
                </div>
            </div>
            <div class="w-full block sm:flex sm:items-center sm:w-auto">
                <div class="text-lg sm:flex-grow">
                    <a href="#" class="block mt-4 sm:inline-block sm:mt-0 text-teal-200 mr-4 border-b-2 border-transparent hover:border-pink-600 {{ Request::is('/om') ? 'border-b-2 border-pink-600' : '' }}">Om</a>
                </div>
            </div>
            <div class="w-full block sm:flex sm:items-center sm:w-auto">
                <div class="text-lg sm:flex-grow">
                    <a href="#" class="block mt-4 sm:inline-block sm:mt-0 text-teal-200 mr-4 border-b-2 border-transparent hover:border-pink-600 {{ Request::is('/contact') ? 'border-b-2 border-pink-600' : '' }}">Kontakt</a>
                </div>
            </div>
        </div>
    </nav>

    {{ $slot }}

</body>
</html>