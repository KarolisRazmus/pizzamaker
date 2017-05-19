@extends('layouts.app')

@section('content')
    <div class="container">

        @if($auth)

            <h3>Create new: {{substr($tableName, 0, -1)}}</h3>

            {{ Form::open(array('url' => '/game')) }}


            {{--{!! Form::open(['url' => route('app.' . $tableName . '.store')]) !!}--}}

            {!! Form::file('image')!!}<br/>

            {!! Form::submit('Create' , ['class' => 'btn btn-success']) !!}<br/><br/>


            <a class="btn btn-primary" href="{{ url('/game') }}
{{--{{ route('app.' . $tableName . '.index') }}--}}
                    ">{{ucfirst($tableName)}} list</a>

            {!! Form::close() !!}

        @elseif(!$auth)
            <a href="{{ url('/login') }}">Login</a>
            <a href="{{ url('/register') }}">Register</a>
        @endif

    </div>
@endsection