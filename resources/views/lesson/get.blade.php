@foreach ($lessons as $lesson)
    echo json_encode(array(
        'id' => {{ $lesson->id }},
        'name' => {{ $lesson->name }},
    ));
@endforeach