@extends('layout')
@section('titulo',"inicio")
@section('importaciones')
@endsection
@section('contenido')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mapa</title>
    <!-- Agrega el ícono de la pestaña del navegador -->
    <link rel="icon" href="imagenes/Fondos/D&DLOGO.png" type="image/png">

    <!-- openseadragon -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/openseadragon/2.4.2/openseadragon.min.js"></script>

    <!-- Estilos -->
    <link rel="stylesheet" href="Estilos/Generico.css">
    <link rel="stylesheet" href="Estilos/Buttom.css">
    <link rel="stylesheet" href="Estilos/Inicio.css">
    <link rel="stylesheet" href="Estilos/footer.css">
    <link rel="stylesheet" href="Estilos/prueba.css">
</head>

<body>
    <footer>
        <button onclick="window.location.href='Seciones/Linothen.html'">Linothen</button>
        <button onclick="window.location.href='Seciones/Ariende.html'">Ariende</button>
        <button onclick="window.location.href='Seciones/Elian.html'">Elian</button>
        <button onclick="window.location.href='Seciones/CortamAram.html'">Cortam Aram</button>
    </footer>
    <article>
        <div id="openseadragon" class="Mapa">
        </div>
        <!-- Botones Continente -->
        <nav>
            <button onclick="window.location.href='index.html'">Reinos</button>
            <button onclick="window.location.href='Inicios/Fronteras.html'">Fronteras</button>
            <button onclick="window.location.href='Inicios/Geografia.html'">Geografia</button>
        </nav>
    </article>
    <footer>
        <button onclick="window.location.href='Articulos/HistoriaGeneral.html'">Historia Orte</button>
        <button onclick="window.location.href='Articulos/CambiosD&D.html'">Cambios Frente D&D</button>
        <button onclick="window.location.href='Articulos/ConocimientoPopular.html'">Conocimiento Popular</button>
    </footer>
    <script src="JS/MapaReinos.js"></script>
    <script src="JS/CarcarContenido.js"></script>
</body>

</html>
@endsection
    