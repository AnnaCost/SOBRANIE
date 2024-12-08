<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SOBRANIE</title>
</head>
<body>
    <h2>Голосование по вопросам:</h2>
    <table border="1">
        <thead>
            <td>id</td>
            <td>ФИО собственника</td>
            <td>Вопрос</td>
            <td>Результат голосования</td>
            <td>Действия</td>
        </thead>
    @foreach ($voting as $vote)
        <tr>
            <td>{{$vote->id}}</td>
            <td>{{$vote->owner->Name_owner}}</td>
            <td>{{$vote->question->Questions}}</td>
            <td>{{$vote->Result}}</td>
            <td><a href="{{url('voting/destroy/' .$vote->id)}}">Удалить</a>
                <a href="{{url('voting/edit/' .$vote->id)}}">Редактировать</a>
            </td>
        </tr>
    @endforeach
    </table>
    {{$voting->links()}}
</body>
</html>
