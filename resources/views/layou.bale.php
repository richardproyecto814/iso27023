<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ url('/inicio') }}">Inicio</a></li>
                <li><a href="{{ url('/usuarios') }}">Usuarios</a></li>
                <li><a href="{{ url('/crearusuario') }}">Crear usuario</a></li>
                <li><a href="{{ url('/identificar') }}">Identificar</a></li>
                <li><a href="{{ url('/proteger1') }}">Proteger</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('contenido')
    </main>
</body>
</html>