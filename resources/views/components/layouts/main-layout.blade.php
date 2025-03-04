<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap.min.css') }}">
    <title>Laravel Gates</title>
</head>
<body>
    
    <div class="container mt-5">
        <p class="display-6">Laravel Gates</p>

        @auth
            <p><span class="text-info me-3">{{ Auth::user()->name }}</span><a href="{{ route('logout') }}">Logout</a></p>
        @else    
            <p class="opacity-75">Nenhum usuário logado</p>
        @endauth
    </div>

    {{ $slot }}
    <script src="asset('assets/bootstrap/bootstrap.bundle.min.js'"></script>
</body>
</html>