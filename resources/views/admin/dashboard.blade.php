<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;400;600;700;900&display=swap">

    <style>
        *{
            font-family: 'Source Sans Pro', sans-serif;
            letter-spacing: -0.025rem;
        }
    </style>
</head>
<body>

   <div style="font-size: 2em">
        @php
          dump('Admin Dashboard')  
        @endphp

        @if (Auth::guard('admin')->check())
            Guard: {{ $userGuard }}    
        @endif
   </div>
   <a href="{{ route('admin.logout') }}">Sair</a>
    
</body>
</html>