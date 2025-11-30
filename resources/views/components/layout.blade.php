<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Workopia | find and list jobs</title>
</head>

<body class="bg-grey-200">

    <x-header />
    @if(request()->is('/'))
        <x-hero />
    @endif
    <main>
        {{-- <h1 class="text-3xl font-bold underline">Layout component</h1> --}}
        <div class="container mx-auto mt-4 p-4">
            {{ $slot }}
        </div>
    </main>

    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>