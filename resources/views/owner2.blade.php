<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SOBRANIE</title>
</head>
<body>
    <h2>{{$owner ? "Голосование собственника ".$owner->Name_owner : 'Неверный ID' }}<h2>
    @if($owner)
    <table border="1">
        <tr>
            <th>id</th>
            <th>Вопрос</th>
            <th>Результат голосования</th>
        </tr>
        @foreach ($owner->Voting as $voting)
            <tr>
                <td>{{$voting->id}}</td>
                <td>{{$voting->question->Questions}}</td>
                <td>{{$voting->Result}}</td>
            </tr>
        @endforeach
    </table>
    @endif
</body>
</html>
