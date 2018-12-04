<html lang="{{ app()->getLocale() }}">
    <head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
    </head>
<body>
    <form method="post" action="{{ route('answer.store') }}"enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Нэр</label>
            <input class="form-control" type="text" name="answer_name"/>
        </div>
        
        <div class="form-group">
            <label for="">Дараалал</label>
            <input class="form-control" type="text" name="answer_sequence"/>
        </div>
        <div class="form-group">
            <label for="">Буруу хариулт</label>
            <input class="form-control" type="text" name="correct_answer"/>
        </div>
    
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" class="btn btn-success" value="Хадгалах">
    </form>
</body>
