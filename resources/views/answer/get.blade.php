@foreach ($answers as $answer)
    echo json_encode(array(
        'id' => {{ $answer->id }},
        'name' => {{ $answer->answer_name }},
        'sequence' => {{ $answer->answer_sequence }},
        'correct' => {{ $answer->correct_answer }},
    ));
@endforeach