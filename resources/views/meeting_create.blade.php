<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SOBRANIE</title>
    <style> .is-invalid { color: red; } </style>
</head>
<body>
<h2>Добавление собрания</h2>
<form method="post" action={{url('meeting')}}/>
    @csrf
    <label>Дата собрания</label>
    <input type="date" name="Date" value="{{ old('Date') }}"/>
    @error('Date')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
<br>
    <label>Инициатор</label>
    <input type="text" name="Initiator" value="{{ old('Initiator') }}"/>
    @error('Initiator')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
<br>
    <label>Адрес</label>
    <select name="dom_id" value="{{ old('dom_id') }}">
        <option style="display:none">
        @foreach ($Dom as $dom)
            <option value="{{$dom->id}}"
                    @if(old('dom_id') == $dom->id) selected
                @endif>{{$dom->Address}}
            </option>
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
