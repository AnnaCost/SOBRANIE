<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SOBRANIE</title>
    <style> .is-invalid { color: red; } </style>
</head>
<body>
<h2>Редактирование результата голосования</h2>
<form method="post" action={{url('voting/update/'.$voting->id)}}/>
    @csrf
    <label>Результат</label>
    <input type="text" name="Result" value="@if (old('name')) {{old('Result')}} @else {{$voting->Result}} @endif " />
    @error('Result')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
   <label>ФИО собственника</label>
    <select name="name_owner_id" value="{{ old('name_owner_id') }}">
        <option style="display:none">
        @foreach ($Owners as $owner)
            <option value="{{$owner->id}}"
                    @if(old('name_owner_id'))
                        @if(old('name_owner_id') == $owner->id) selected @endif
                    @else
                        @if($voting->name_owner_id == $owner->id) selected @endif
                @endif >{{$owner->Name_owner}}</option>
        @endforeach
    </select>
    @error('name_owner_id_id')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <label>Вопрос</label>
    <select name="questions_id" value="{{ old('questions_id') }}">
        <option style="display:none">
        @foreach ($Questions as $question)
            <option value="{{$question->id}}"
                    @if(old('questions_id'))
                        @if(old('questions_id') == $question->id) selected @endif
                    @else
                        @if($voting->questions_id == $question->id) selected @endif
                @endif >{{$question->Questions}}</option>
        @endforeach
    </select>
    @error('questions_id')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
<br>
<input type="submit">
</form>
</body>
</html>
