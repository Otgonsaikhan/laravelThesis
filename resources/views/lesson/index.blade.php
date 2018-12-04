<html lang="{{ app()->getLocale() }}">
    <head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
    </head>
<body>
    <a href="{{route('lesson.create')}}">Шинэ төрөл нэмэх</a>
    <table>
        <tr>
            <td><b>ID</b></td>
            <td><b>Lesson Name</b></td>
        
            <td></td>
        </tr>
        @foreach ($lessons as $lesson)
            <tr>
                <td>{{ $lesson->id }}</td>
                <td>{{ $lesson->name }}</td>
            </tr>
        @endforeach
    </table>
</body>