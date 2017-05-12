<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{csrf_token()}}"/>
    <title>@yield('title')</title>
    @include('includes.css')
    {{--@include('fonts')--}}
    {{--@include('meta')--}}
</head>
<body>
{{--@include('header')--}}

<h1>@yield('title')</h1>
@yield('content')


@yield('includes.js')
@yield('html_script')

{{--@include('footer')--}}
</body>
{{--@include('js')--}}
{{--@include('scripts')--}}
</html>