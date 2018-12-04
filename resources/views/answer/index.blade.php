<html lang="{{ app()->getLocale() }}">
    <head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
    </head>
<body>
   
    <table  class="table table-list"  >
        <tr>
            <td><b>ID</b></td>
            <td><b>Answer Name</b></td>
            <td><b>Answer sequence</b></td>
            <td><b>Correct answer</b></td>
            <td></td>
        </tr>
        @foreach ($answers as $answer)
            <tr>
                <td>{{ $answer->id }}</td>
                <td>{{ $answer->answer_name }}</td>
                <td>{{ $answer->answer_sequence }}</td>
                <td>{{ $answer->correct_answer }}</td>
            
            
            </tr>
        @endforeach
    </table>
    <a href="{{route('answer.create')}}">Шинэ асуулт нэмэх</a>
</body>