{{--//        foreach ($users->equestions as $equestion) {--}}
{{--//--}}
{{--//       echo $equestion->id;--}}
{{--//--}}
{{--//       }--}}


@extends('layouts.app')

@section('content')


    <div class="container">
        @foreach($users->equestions as $equestion)
            <div class="row">
                {{csrf_field()}}
                <div class="col-md-12">
                    {{$equestion->title}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    {{$equestion->right_answer}}
                </div>
            </div>
        @endforeach
    </div>


@endsection