<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <h2>Nueva Tienda</h2>
    @if(session('exito'))
        <p>{{session('exito')}}</p>
    @endif

    <form action="{{ url('/tiendas/mostrarexito') }}" method="post">

        <label for="">Nombre de la tienda</label><br><br>

        @csrf
        <input type="text" name="nom"><br><br>
        <label for="">Direccion de la tienda</label><br><br>
        <input type="text" name="dir"><br><br>
        <button type="submit">Registrar</button>

    </form>
</body>
</html>