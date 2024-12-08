<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SOBRANIE</title>
    <style> .is-invalid { color: red; } </style>
</head>
<body>
<h2>Редактирование апартаментов</h2>
<form method="post" action={{url('apartment/update/'.$apartment->id)}}/>
    @csrf
    <label>Номер квартиры</label>
    <input type="text" name="Apartment" value="@if (old('name')) {{old('Apartment')}} @else {{$apartment->Apartment}} @endif " />
    @error('Apartment')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <label>Количество собственников</label>
    <input type="text" name="Numbers_owners" value="@if (old('name')) {{old('Numbers_owners')}} @else {{$apartment->Numbers_owners}} @endif " />
    @error('Numbers_owners')
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
                        @if($apartment->dom_id == $dom->id) selected @endif
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
