<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SOBRANIE</title>
</head>
<body>
    <h2>{{$meeting ? "Вопросы собрания ".$meeting->Date : 'Неверный ID' }}<h2>
    @if($meeting)
    <table border="1">
        <tr>
            <th>id</th>
            <th>Текст вопроса</th>
        </tr>
        @foreach ($meeting->Questions as $question)
            <tr>
                <td>{{$question->id}}</td>
                <td>{{$question->Questions}}</td>
            </tr>
        @endforeach
    </table>
    @endif
</body>
</html>
