<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje Recibido</title>
</head>
<body>
    Contenido Mail.
{{--{{var_dump()}}<!--Se vería contenido que se ingresa-->--}}

    <p>Recibiste un mensaje de : {{$msg['name']}}</p>
    <p>Correo: {{$msg['mail']}}</p>
    <p>Contenido: {{$msg['content']}}</p>
</body>
</html>
