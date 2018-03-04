@extends('layouts.app')

@section('content')



    <div class="container">
        <div class="row">
            <div class="com-md-12">
                @if (Route::has('login'))
                    @auth
                        <div class="text-question">
                        </div>
                        {{$question->title}}
            </div>
        </div>
        <div class="com-md-12">
            <form action="{{ route('question.check', ['id' => $question->id]) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <label for="answer"></label>
                <input type="text" class="form-control mx-sm-3" name="answer" placeholder="Введите ответ">
                <button type="submit" class="btn btn-primary">Ответить</button>
            </form>
        </div>
        @else
            {{--если вход не совершен --}}
            <div class="row">
                <div class="col-md-12">
                    <h3>Пожалуйста зарегистрируйтесь</h3>
                </div>
            </div>
    </div>
    @endauth
    @endif


@endsection
