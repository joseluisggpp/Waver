<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <form action="/cart/1" method="post">
        @csrf
        <input type="number" name="cantidad">
        <button type="submit">Enviar</button>
    </form>
    <form action="/cart/999" method="post">
        @csrf
        @error('producto')
        <span style="color: red;">{{ $message }}</span>
        @enderror
        <input type="number" name="cantidad">
        <button type="submit">Enviar</button>
    </form>
</body>

</html>