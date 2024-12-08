<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SOBRANIE</title>
</head>
<body>
    <h2>Собрание дома:</h2>
    <table border="1">
        <thead>
            <td>id</td>
            <td>Номер дома</td>
            <td>Дата собрания</td>
            <td>Инициатор</td>
            <td>Действия</td>
        </thead>
    @foreach ($Meeting as $meeting)
        <tr>
            <td>{{$meeting->id}}</td>
            <td>{{$meeting->dom->Address}}</td>
            <td>{{$meeting->Date}}</td>
            <td>{{$meeting->Initiator}}</td>
            <td><a href="{{url('meeting/destroy/' .$meeting->id)}}">Удалить</a>
                <a href="{{url('meeting/edit/' .$meeting->id)}}">Редактировать</a>
            </td>
        </tr>
    @endforeach
    </table>
    {{$Meeting->links()}}
</body>
</html>
