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
            <td>Действия</td>
        </thead>
    @foreach ($Owners as $owner)
        <tr>
            <td>{{$owner->id}}</td>
            <td>{{$owner->apartment->Apartment}}</td>
            <td>{{$owner->Name_owner}}</td>
            <td>{{$owner->Ownership_interest}}</td>
            <td>{{$owner->Password}}</td>
            <td><a href="{{url('owner/destroy/' .$owner->id)}}">Удалить</a>
                <a href="{{url('owner/edit/' .$owner->id)}}">Редактировать</a>
            </td>
        </tr>
    @endforeach
    </table>
    {{$Owners->links()}}
</body>
</html>
