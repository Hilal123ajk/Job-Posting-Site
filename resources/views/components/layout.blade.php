<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laragigs</title>
    {{-- Alpine.js CDN  --}}
    <script src="//unpkg.com/alpinejs" defer></script>
    @vite('resources/css/app.css')
</head>
<body>

    <div class="navbar flex justify-between items-center mx-5 my-1">
        <div>
            <img src="{{ asset('images/job-search.png') }}" class="w-16 h-16" alt="main-logo">
        </div>
        <div>

            <ul class="flex mx-5">
                @auth

                    <li class="mx-2">
                        Wellcome <span class="font-bold cursor-pointer">{{ auth()->user()->name }}</span>
                    </li>
                    <li class="mx-2 cursor-pointer underline">
                        <form action="/logout" method="POST">
                            @csrf
                            <button type="submit" class="underline">Log-Out</button>
                        </form>
                    </li>
                @else
                    <li class="mx-2 cursor-pointer underline">
                        <a href="/register">Register</a>
                    </li>
                    <li class="mx-2 cursor-pointer underline">
                        <a href="/login">Login</a>
                    </li>

                @endauth
            </ul>

        </div>
    </div>

    <x-flash-message />


    {{-- All your view part below  --}}
    {{ $slot }}
</body>
</html>
