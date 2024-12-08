<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SOBRANIE</title>
    <style> .is-invalid { color: red; } </style>
</head>
<body>
<h2>Редактирование собственников</h2>
<form method="post" action={{url('owner/update/'.$owner->id)}}/>
    @csrf
    <label>Имя собственника</label>
    <input type="text" name="Name_owner" value="@if (old('name')) {{old('Name_owner')}} @else {{$owner->Name_owner}} @endif " />
    @error('Name_owner')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <label>Доля в собственности</label>
    <input type="text" name="Ownership_interest" value="@if (old('name')) {{old('Ownership_interest')}} @else {{$owner->Ownership_interest}} @endif " />
    @error('Ownership_interest')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <label>Пароль</label>
    <input type="text" name="Password" value="@if (old('name')) {{old('Password')}} @else {{$owner->Password}} @endif " />
    @error('Password')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <label>Номер квартиры</label>
    <select name="apartment_id" value="{{ old('apartment_id') }}">
        <option style="display:none">
        @foreach ($Apartment as $apartment)
            <option value="{{$apartment->id}}"
                    @if(old('apartment_id'))
                        @if(old('apartment_id') == $apartment->id) selected @endif
                    @else
                        @if($owner->apartment_id == $apartment->id) selected @endif
                @endif >{{$apartment->Apartment}}</option>
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
