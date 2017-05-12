@extends('content.admin.main')

@section('title', trans('app.list'))

@section('content')

    <body style="background-color: slategrey; color: white"></body>

    <div class="container">
        <table class="table">
            <thead>
            <tr>

                @foreach($list[0] as $key => $value)

                    <th class="col-md-2">{{$key}}</th>

                @endforeach
                    <th class="col-md-2">View</th>
                    <th class="col-md-2">Edit</th>
                    <th class="col-md-2">Delete</th>
            </tr>

            </thead>
            <tbody>

                @foreach($list as $key => $row)
                    <tr>
                        @foreach($row as $key => $item)
                            <td class="col-md-2">{{$item}}</td>
                        @endforeach

                            <td class="col-md-2"><button type="button"><a href={{route('app.' . $routeName . '.show',$row['id'])}}>View</a></button></td>
                            <td class="col-md-2"><button type="button"><a href={{route('app.' . $routeName . '.edit',$row['id'])}}>Edit</a></button></td>
                            <td class="col-md-2"><button type="button"><a onclick="deleteItem('{{$delete,$row['id']}}')">Delete</a></button></td>
                    </tr>
                @endforeach

            </tbody>
        </table>

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