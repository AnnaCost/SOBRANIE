<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SOBRANIE</title>
</head>
<body>
    <h2>Квартиры в домах:</h2>
    <table border="1">
        <thead>
            <td>id</td>
            <td>Номер дома</td>
            <td>Номер квартиры</td>
            <td>Количество собственников</td>
            <td>Личный аккаунт</td>
        </thead>
    @foreach ($Apartment as $apartment)
        <tr>
            <td>{{$apartment->id}}</td>
            <td>{{$apartment->dom->Address}}</td>
            <td>{{$apartment->Apartment}}</td>
            <td>{{$apartment->Numbers_owners}}</td>
            <td>{{$apartment->Personal_account}}</td>
        </tr>
    @endforeach
    </table>
</body>
</html>
