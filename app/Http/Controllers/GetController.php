<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function answer()
    {
        $answer = \App\Answer::orderby('created_at', 'desc')->get();
        return view('answer.get', [
            'answers' => $answer,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function question()
    {
        $question = \App\Question::orderby('created_at', 'desc')->get();
        return view('question.get', [
            'questions' => $question,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function level()
    {
        $level = \App\Level::orderby('created_at', 'desc')->get();
        return view('level.get', [
            'levels' => $level,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lesson()
    {
        $lesson = \App\Lesson::orderby('created_at', 'desc')->get();
        return view('lesson.get', [
            'lessons' => $lesson,
        ]);
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
