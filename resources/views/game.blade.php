@extends('layouts.app')

@section('content')
    <div class="container">

        @if($auth)

            <h3>Create new: {{substr($tableName, 0, -1)}}</h3>

            {!! Form::open(['url' => route('front-end.' . $tableName . '.store'), 'files' => true]) !!}

            {!! Form::file('image', ['class' => 'form-control'])!!}<br/>

            {!! Form::submit('Create' , ['class' => 'btn btn-success']) !!}
            <a class="btn btn-primary" href="{{ route('front-end.' . $tableName . '.index') }}">{{ucfirst($tableName)}} list</a>

            {!! Form::close() !!}

        @elseif(!$auth)
            <a href="{{ url('/login') }}">Login</a>
            <a href="{{ url('/register') }}">Register</a>
        @endif

    </div>
@endsection