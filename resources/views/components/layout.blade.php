<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Next Learn</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('images/logo1.jpeg') }}">
    @vite('resources/css/app.css')
</head>
<body class="bg-neutral-white">
    <div class="container mx-auto">
        <header class="flex justify-between items-center py-4">
            <div class="logo flex items-center w-1/4">
                <img src="{{ asset('images/logo1.jpeg') }}" alt="logo" class="w-20">
                <a href="/"> 
                    <h1 class="text-2xl font-bold text-text-primary">Next Learn</h1>
                </a>
            </div>
            <x-nav-links />
            <div class="sessions w-1/4 flex justify-end space-x-4">
                <a href="{{ route('register.online') }}" class="inline-flex items-center bg-primary-blue hover:bg-primary-lightBlue text-neutral-white px-4 py-2 rounded-lg transition-colors border border-0">
                    Register
                </a>
                <a href="/login" class="inline-flex items-center bg-primary-blue hover:bg-primary-lightBlue text-neutral-white px-4 py-2 rounded-lg transition-colors border border-0">
                    Login
                </a>
            </div>
        </header>
    </div>
  
        {{ $slot }}
   
</body>
</html>