<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Library</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        <nav class="navbar">
            <div class="logo">
                <h1><a href="{{ route('libraries.index') }}">Biblioteca de Dani</a></h1>
            </div>
            <ul class="nav-links">
                <li><a href="{{ route('libraries.index') }}">Ver Libros</a></li>
                <li><a href="{{ route('libraries.create') }}">Añadir Libros</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h2>Bienvenidos a mi biblioteca</h2>
            <p>Explora nuestra colección, Dona libros, o modifica los detalles de los que tenemos si crees que no son correctos.</p>
            <a href="{{ route('libraries.index') }}" class="btn">Explorar Libros</a>
        </div>
    </section>

    <section class="featured">
        <h3>Maneja tu Biblioteca</h3>
        <div class="actions">
            <div class="action-card">
                <h4><a href="{{ route('libraries.index') }}">Ver Libros</a></h4>
                <p>Navega por nuestra colección al completo</p>
            </div>
            <div class="action-card">
                <h4><a href="{{ route('libraries.create') }}">Añadir libro</a></h4>
                <p>Dona un libro nuevo para la colección</p>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Biblioteca. Todos los derechos reservados.</p>
    </footer>

</body>
</html>

