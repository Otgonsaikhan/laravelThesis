@foreach ($questions as $question)
    echo json_encode(array(
        'id' => {{ $question->id }},
        'name' => {{ $question->question_name }},
        'sequence' => {{ $question->question_sequence }},
    ));
@endforeach