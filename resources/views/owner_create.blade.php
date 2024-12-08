<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SOBRANIE</title>
    <style> .is-invalid { color: red; } </style>
</head>
<body>
<h2>Добавление собственников</h2>
<form method="post" action={{url('owner')}}/>
    @csrf
    <label>Имя собственника</label>
    <input type="text" name="Name_owner" value="{{ old('Name_owner') }}"/>
    @error('Name_owner')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
<br>
    <label>Доля в собственности</label>
    <input type="text" name="Ownership_interest" value="{{ old('Ownership_interest') }}"/>
    @error('Ownership_interest')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
<br>
    <label>Пароль</label>
    <input type="text" name="Password" value="{{ old('Password') }}"/>
    @error('Password')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
<br>
    <label>Номер квартиры</label>
    <select name="apartment_id" value="{{ old('apartment_id') }}">
        <option style="display:none">
        @foreach ($Apartment as $apartment)
            <option value="{{$apartment->id}}"
                    @if(old('apartment_id') == $apartment->id) selected
                @endif>{{$apartment->Apartment}}
            </option>
        @endforeach
    </select>
    @error('apartment_id')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
<br>
<input type="submit">
</form>
</body>
</html>
