<!DOCTYPE html>
<html lang="en">
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
                <img src="images/logo1.jpeg" alt="logo" class="w-20">
                <a href="/"> 
                    <h1 class="text-2xl font-bold text-text-primary">Next Learn</h1>
                </a>
            </div>
            <nav class="flex items-center justify-center space-x-6 flex-1">
                <a href="/" class="text-text-primary hover:text-primary-blue transition-colors">Home</a>
                <a href="/about" class="text-text-primary hover:text-primary-blue transition-colors">About</a>
                <a href="/contact" class="text-text-primary hover:text-primary-blue transition-colors">Contact</a>
                <a href="/courses" class="text-text-primary hover:text-primary-blue transition-colors">Courses</a>
                <a href="/exams" class="text-text-primary hover:text-primary-blue transition-colors">Exams</a>
            </nav>
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