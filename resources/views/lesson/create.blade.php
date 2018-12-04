
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
    </head>
<body>
    <form method="post" action="{{ route('lesson.store') }}"enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Хичээл Нэр</label>
            <input class="form-control" type="text" name="name"/>
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" class="btn btn-success" value="Хадгалах">
    </form>
</body>

