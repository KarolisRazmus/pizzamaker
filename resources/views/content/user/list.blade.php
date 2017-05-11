@extends('content.user.main')

@section('title', trans('app.list'))

@section('content')

    <body style="background-color: green; color: white"></body>

    <div class="container">
        <table class="table">
            <tr>
                @foreach($item as $key => $item)

                <th class="col-md-2">{{$key}}</th>

                @endforeach
            </tr>



                @foreach($list['item'] as $key => $item)
                <tr>
                    <td class="col-md-2">{{$item}}</td>

                        <ul>
                            <li>{{$pizza['ground']['name']}}</li>
                            <li>{{$pizza['cheese']['name']}}</li>


                        </ul>

                    </td>
                    <td class="col-md-2">{{$pizza['calories']}} kcal</td>
                </tr>
                @endforeach

        </table>
    </div>

@endsection

