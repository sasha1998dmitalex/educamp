@extends('layouts.app')

@section('content')

    <div class="container">
        @foreach($questions as $question)
        <div class="row">
            <div class="col-md-12">
                {{csrf_field()}}
                {{$question->title}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                {{$question->right_answer}}
            </div>
        </div>
            @endforeach
    </div>
@endsection
