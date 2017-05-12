@extends('content.admin.main')

@section('title', trans('app.item'))

@section('content')

    <body style="background-color: green; color: black"></body>

    {!! Form::open(['url' => route('app.' . $routeName . '.create')]) !!}

    @if(isset($error))
        <h4 style="color:red">{{ $error['message'] }}</h4>
    @endif

    @if(isset($comment))
        <h4 style="color:red">{{ $comment['message'] }}</h4>
    @endif

    @foreach($formKeys as $key)

        @if($key)
            {!! Form::label($key, "Write " . ucfirst($key)) !!}
            {!! Form::text($key)!!}<br/>
        @endif

    @endforeach

    <br/>

    {!! Form::submit('Add') !!}

    {!! Form::close() !!}

@endsection