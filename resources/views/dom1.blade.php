<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SOBRANIE</title>
</head>
<body>
    <h2>Адреса домов:</h2>
    <table border="1">
        <thead>
            <td>id</td>
            <td>Город</td>
            <td>Адрес</td>
        </thead>
    @foreach ($Dom as $dom)
        <tr>
            <td>{{$dom->id}}</td>
            <td>{{$dom->City}}</td>
            <td>{{$dom->Address}}</td>
        </tr>
    @endforeach
    </table>
</body>
</html>
