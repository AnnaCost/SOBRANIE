<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SOBRANIE</title>
</head>
<body>
    <h2>Вопросы для голосования:</h2>
    <table border="1">
        <thead>
            <td>id</td>
            <td>Собрание</td>
            <td>Текст вопроса</td>
            <td>Действия</td>
        </thead>
    @foreach ($Questions as $question)
        <tr>
            <td>{{$question->id}}</td>
            <td>{{$question->meeting->Date}}</td>
            <td>{{$question->Questions}}</td>
            <td><a href="{{url('question/destroy/' .$question->id)}}">Удалить</a>
                <a href="{{url('question/edit/' .$question->id)}}">Редактировать</a>
            </td>
        </tr>
    @endforeach
    </table>
    {{$Questions->links()}}
</body>
</html>
