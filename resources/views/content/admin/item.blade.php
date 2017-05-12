@extends('content.admin.main')

@section('title', trans('app.item'))

@section('content')

    <body style="background-color: green; color: white"></body>

    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th class="col-md-2">Name</th>
                <th class="col-md-2">Value</th>
            </tr>
            </thead>
            <tbody>

            @foreach($item as $key => $value)
                <tr>
                    <td class="col-md-2">{{$key}}</td>
                    <td class="col-md-2">{{$value}}</td>

                </tr>
            @endforeach

            </tbody>
        </table>

        <td class="col-md-2"><button type="button"><a href={{route('app.' . $routeName . '.edit',$item['id'])}}>Edit</a></button></td>
        <td class="col-md-2"><button type="button"><a onclick="deleteItem('{{route('app.' . $routeName . '.delete',$item['id'])}}')">Delete</a></button></td>

    </div>

@endsection

@section('html_script')

    <script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function deleteItem(route)
        {
            $.ajax({
                url: route,
                type: 'DELETE',
                dataType: 'json',
                success: function () {
                    alert('DELETE pavyko');
                },
                error: function () {
                    alert('Kuku ERROR');
                }
            })
        }
    </script>

@endsection