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
        @foreach ($question->Voting as $voting)
            <tr>
                <td>{{$voting->id}}</td>
                <td>{{$voting->owner->Name_owner}}</td>
                <td>{{$voting->Result}}</td>
            </tr>
        @endforeach
    </table>
    @endif
</body>
</html>
