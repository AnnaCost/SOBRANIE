<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SOBRANIE</title>
    <style> .is-invalid { color: red; } </style>
</head>
<body>
<h2>Добавление вопросов собрания</h2>
<form method="post" action={{url('question')}}/>
    @csrf
    <label>Вопрос</label>
    <input type="text" name="Questions" value="{{ old('Questions') }}"/>
    @error('Questions')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <label>Собрание</label>
    <select name="meeting_id" value="{{ old('meeting_id') }}">
        <option style="display:none">
        @foreach ($Meeting as $meeting)
            <option value="{{$meeting->id}}"
                    @if(old('meeting_id') == $meeting->id) selected
                @endif>{{$meeting->Date}}
            </option>
        @endforeach
    </select>
    @error('meeting_id')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
<br>
    <input type="submit">
</form>
</body>
</html>
