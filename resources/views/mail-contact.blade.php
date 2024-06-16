<html lang="es">

<head>
    <title>Correo de contacto</title>
</head>

<body>
    <div style="padding: 1rem; background: #464450; color: whitesmoke; border-radius: 0.5rem; text-align: center">
        <h1 style="color: #f6f6f6">De {{$mail['name']}} </h1>

        <h2 style="color: #f6f6f6">Email {{$mail['email']}} </h2>

        @if(isset($mail['phone']))
        <h2 style="color:#f6f6f6">Phone {{$mail['phone']}} </h2>
        @endif
        @if(isset($mail['subject']))
        @endif
        <p style="color:#f6f6f6">{{$mail['content']}}</p>
    </div>
</body>

</html>