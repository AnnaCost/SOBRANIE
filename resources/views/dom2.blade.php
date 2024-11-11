<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SOBRANIE</title>
</head>
<body>
    <h2>{{$dom ? "Перечень квартир в доме ".$dom->Address : 'Неверный ID' }}<h2>
    @if($dom)
    <table border="1">
        <tr>
            <th>id</th>
            <th>Номер квартиры</th>
            <th>Количество собственников</th>
            <th>Личный аккаунт</th>
        </tr>
        @foreach ($dom->Apartment as $apartment)
            <tr>
                <td>{{$apartment->id}}</td>
                <td>{{$apartment->Apartment}}</td>
                <td>{{$apartment->Numbers_owners}}</td>
                <td>{{$apartment->Personal_account}}</td>
            </tr>
        @endforeach
    </table>
    <h2>{{$dom ? "Собрание дома ".$dom->Address : 'Неверный ID' }}<h2>
    <table border="1">
        <tr>
            <th>id</th>
            <th>Дата собрания</th>
            <th>Инициатор</th>
        </tr>
        @foreach ($dom->Meeting as $meeting)
            <tr>
                <td>{{$meeting->id}}</td>
                <td>{{$meeting->Date}}</td>
                <td>{{$meeting->Initiator}}</td>
            </tr>
        @endforeach
    </table>
    @endif
</body>
</html>
