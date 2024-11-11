<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SOBRANIE</title>
</head>
<body>
    <h2>{{$apartment ? "Собственники квартир ".$apartment->Apartment : 'Неверный ID' }}<h2>
    @if($apartment)
    <table border="1">
        <tr>
            <th>id</th>
            <th>ФИО собственника</th>
            <th>Доля собственника</th>
            <th>Пароль</th>
        </tr>
        @foreach ($apartment->Owners as $owner)
            <tr>
                <td>{{$owner->id}}</td>
                <td>{{$owner->Name_owner}}</td>
                <td>{{$owner->Ownership_interest}}</td>
                <td>{{$owner->Password}}</td>
            </tr>
        @endforeach
    </table>
    @endif
</body>
</html>
