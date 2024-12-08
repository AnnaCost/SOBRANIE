<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SOBRANIE</title>
</head>
<body>
    <h2>{{$question ? "Голосование по вопросу ".$question->Questions : 'Неверный ID' }}<h2>
    @if($question)
    <table border="1">
        <tr>
            <th>id</th>
            <th>ФИО собственника</th>
            <th>Результат голосования</th>
        </tr>
        @foreach ($question->voting as $vote)
            <tr>
                <td>{{$vote->id}}</td>
                <td>{{$vote->owner->Name_owner}}</td>
                <td>{{$vote->Result}}</td>
            </tr>
        @endforeach
    </table>
    @endif
</body>
</html>
