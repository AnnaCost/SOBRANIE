<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SOBRANIE</title>
</head>
<body>
    <h2>Собственники многоквартирного дома:</h2>
    <table border="1">
        <thead>
            <td>id</td>
            <td>Номер квартиры</td>
            <td>ФИО собственника</td>
            <td>Доля собственника</td>
            <td>Пароль</td>
        </thead>
    @foreach ($Owners as $owner)
        <tr>
            <td>{{$owner->id}}</td>
            <td>{{$owner->apartment->Apartment}}</td>
            <td>{{$owner->Name_owner}}</td>
            <td>{{$owner->Ownership_interest}}</td>
            <td>{{$owner->Password}}</td>
        </tr>
    @endforeach
    </table>
</body>
</html>
