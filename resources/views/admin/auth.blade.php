<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Authentication</title>
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

    <h1>Admin Login</h1>

    <form action="{{ route('admin.auth') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="group" style="margin: 10px 0;">
            <label for="email"></label>
            <input type="email" name="email" id="email" placeholder="Insira um e-mail">
        </div>

        <div class="group" style="margin: 10px 0;">
            <label for="password"></label>
            <input type="password" name="password" id="password" placeholder="Insira uma senha">
        </div>

        <button type="submit">Entrar</button>
    
    </form>
    
</body>
</html>