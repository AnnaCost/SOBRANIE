<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SOBRANIE</title>
    <style> .is-invalid { color: red; } </style>
</head>
<body>
<h2>Добавление апартаментов</h2>
<form method="post" action={{url('apartment')}}/>
    @csrf
    <label>Номер квартиры</label>
    <input type="text" name="Apartment" value="{{ old('Apartment') }}"/>
    @error('Apartment')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
<br>
    <label>Количество собственников</label>
    <input type="text" name="Numbers_owners" value="{{ old('Numbers_owners') }}"/>
    @error('Numbers_owners')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
<br>
    <label>Лицевой счет</label>
    <input type="text" name="Personal_account" value="{{ old('Personal_account') }}"/>
    @error('Personal_account')
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