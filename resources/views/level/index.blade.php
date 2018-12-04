<html lang="{{ app()->getLocale() }}">
    <head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
    </head>
<body>
    <a href="{{route('level.create')}}">Шинэ төрөл нэмэх</a>
    <table>
        <tr>
            <td><b>ID</b></td>
            <td><b>Level Name</b></td>
        
            <td></td>
        </tr>
        @foreach ($levels as $level)
            <tr>
                <td>{{ $level->id }}</td>
                <td>{{ $level->name }}</td>
            </tr>
        @endforeach
    </table>
</body>