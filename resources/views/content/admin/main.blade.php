<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{csrf_token()}}"/>
    <title>@yield('title')</title>
    @include('css')
    {{--@include('fonts')--}}
    {{--@include('meta')--}}
</head>
<body>
{{--@include('header')--}}

<h1>@yield('title')</h1>
@yield('content')

{{--@include('footer')--}}
</body>
{{--@include('js')--}}
{{--@include('scripts')--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>