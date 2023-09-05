<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
</head>
<body>
    <form action="/register" method="POST">
        @csrf
        Nombre: <input type="text" name="name">
        Identificación<input type="text" name="identification">
        Celular<input type="text" name="celular">
        Email<input type="email" name="email">
        Password<input type="password" name="password">
        Password Confirmación<input type="password" name="password_confirmation">
        <input type="submit" value="Registrar">
    </form>
</body>
</html>