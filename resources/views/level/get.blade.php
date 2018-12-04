@foreach ($levels as $level)
    echo json_encode(array(
        'id' => {{ $level->id }},
        'name' => {{ $level->name }},
    ));
@endforeach