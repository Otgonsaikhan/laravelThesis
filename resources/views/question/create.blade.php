<html lang="{{ app()->getLocale() }}">
    <head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
    </head>
<body>
    <form method="post" action="{{ route('question.store') }}"enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Нэр</label>
            <input class="form-control" type="text" name="question_name"/>
        </div>
        
        <div class="form-group">
            <label for="">Дараалал</label>
            <input class="form-control" type="text" name="question_sequence"/>
        </div>
    
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" class="btn btn-success" value="Хадгалах">
    </form>
</body>
