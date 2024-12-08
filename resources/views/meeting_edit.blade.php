<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SOBRANIE</title>
    <style> .is-invalid { color: red; } </style>
</head>
<body>
<h2>Редактирование собрания</h2>
<form method="post" action={{url('meeting/update/'.$meeting->id)}}/>
    @csrf
    <label>Дата собрания</label>
            <input type="text" name="Date" value="@if (old('name')) {{old('Date')}} @else {{$meeting->Date}} @endif " />
            @error('Date')
            <div class="is-invalid">{{ $message }}</div>
            @enderror
    <label>Инициатор</label>
            <input type="text" name="Initiator" value="@if (old('name')) {{old('Initiator')}} @else {{$meeting->Initiator}} @endif " />
            @error('Initiator')
            <div class="is-invalid">{{ $message }}</div>
            @enderror
    <label>Адрес</label>
    <select name="dom_id" value="{{ old('dom_id') }}">
        <option style="display:none">
        @foreach ($Dom as $dom)
            <option value="{{$dom->id}}"
                    @if(old('dom_id'))
                        @if(old('dom_id') == $dom->id) selected @endif
                    @else
                        @if($meeting->dom_id == $dom->id) selected @endif
                @endif >{{$dom->Address}}</option>
        @endforeach
    </select>
    @error('dom_id')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
<br>
<input type="submit">
</form>
</body>
</html>
