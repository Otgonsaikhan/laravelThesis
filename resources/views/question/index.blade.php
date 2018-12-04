
<html lang="{{ app()->getLocale() }}">
    <head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
    </head>
<body>
    <a href="{{route('question.create')}}">Шинэ асуулт нэмэх</a>
    <table>
        <tr>
            <td><b>ID</b></td>
            <td><b>Quesqion Name</b></td>
            <td><b>Quesqion sequence</b></td>
            <td></td>
        </tr>
        @foreach ($questions as $question)
            <tr>
                <td>{{ $question->id }}</td>
                <td>{{ $question->question_name }}</td>
                <td>{{ $question->question_sequence }}</td>
            
            
            </tr>
        @endforeach
    </table>
</body>
