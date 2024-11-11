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
        </thead>
    @foreach ($Voting as $voting)
        <tr>
            <td>{{$voting->id}}</td>
            <td>{{$voting->owner ? $voting->owner->Name_owner : 'Не указано' }}</td>
            <td>{{$voting->question ? $voting->question->Questions : 'Не указано' }}</td>
            <td>{{$voting->Result}}</td>
        </tr>
    @endforeach
    </table>
</body>
</html>
