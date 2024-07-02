<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            font-family: 'Times New Roman';
            background-color: #f4f4f4;
            color: #333;
        }
        hr {
            height: 1px;
            background-color: red;
            margin: 5px 0;
        }
        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
            background-color: #88fcf7;
            padding: 4px 8px; /* Reducir el padding de los enlaces */
            border-bottom: 1px solid #e0e0e0;
            display: flex;
            justify-content: space-around;
            align-items: center; /* Alinear verticalmente los elementos */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            
        }
        .logo-empresa {
            color: black; /* Color del texto de la empresa */
            text-decoration: none;
            display: flex;
            align-items: center; /* Alinear verticalmente el ícono y el texto */
            font-weight: bold;
        }
        .logo-empresa .icono-torre {
            font-size: 20pt; /* Tamaño del ícono */
        }
        .navbar a {
            color: #007bff;
            text-decoration: none;
            padding: 10px 20px;
            display: inline-block;
            transition: color 0.3s;
            font-weight: bold;
            border-radius: 5px; /* Bordes redondeados para todos los enlaces */
            margin-right: 100px; /* Espacio entre los enlaces */
        }
        .navbar .activo a {
            color: red;
            text-decoration: none; /* Quita la subraya al estar activo */
            
        }
        .navbar a:hover {
            color: #0056b3;
            text-decoration: none; /* Quita la subraya al pasar el mouse */
            
        }
        /* Estilo específico para los enlaces dentro de .navbar div */
        .navbar div a {
            background-color: blue;
            color: white;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <a class="logo-empresa" href="#">
            <span class="icono-torre">&#127984;</span> Empresa
        </a>
        <div class="{{ setActivo('home') }}"><a href="{{ route('home') }}">Home</a></div>
        <div class="{{ setActivo('personas') }}"><a href="{{ route('personas') }}">Personas</a></div>
        <div class="{{ setActivo('contacto') }}"><a href="{{ route('contacto') }}">Contacto</a></div>
    </div>
    <hr>
</body>
</html>
