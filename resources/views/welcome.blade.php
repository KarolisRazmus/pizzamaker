<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pizzamaker</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Pizzamaker
                </div>

                <div class="links">
                    <a href="https://github.com/CodeAcademyDreamTeam/pizzamaker">DreamTeam Github</a><br/><br/>
                    <a href="https://github.com/aivarasvain">Aivaras Github</a><br/>
                    <a href="https://github.com/monikasmilga">Monika Github</a><br/>
                    <a href="https://github.com/RamintaRam">Raminta Github</a><br/>
                    <a href="https://github.com/KarolisRazmus">Karolis Github</a><br/>
                </div>
<br/>
                <div>
                    <table>
                        <tr>
                            <th>Create</th>
                            <th>Edit</th>
                            <th>List</th>
                        </tr>
                        <tr>
                            <td class="links"><a href=http://pizzamaker.dev/pizzas/create">Pizza (as user)</a></td>
                            <td class="links"><a href="http://pizzamaker.dev/pizzas/edit">Pizza (as user)</a></td>
                            <td class="links"><a href="http://pizzamaker.dev/admin/pizzas">Pizzas (as user)</a></td>
                        </tr>
                        {{--@if(!$allRolesArray == 'member')--}}

                            dd($allRolesArray);
                        <tr>
                            <td class="links"><a href="http://pizzamaker.dev/admin/pizzas/create">Pizza</a></td>
                            <td class="links"><a href="http://pizzamaker.dev/admin/pizzas/edit">Pizza</a></td>
                            <td class="links"><a href="http://pizzamaker.dev/admin/pizzas">Pizzas</a></td>
                        </tr>
                        <tr>
                            <td class="links"><a href="http://pizzamaker.dev/admin/cheeses/create">Cheeses</a></td>
                            <td class="links"><a href="http://pizzamaker.dev/admin/cheeses/edit">Cheeses</a></td>
                            <td class="links"><a href="http://pizzamaker.dev/admin/cheeses">Cheeses</a></td>
                        </tr>
                        <tr>
                            <td class="links"><a href="http://pizzamaker.dev/admin/ingredients/create">Ingredients</a></td>
                            <td class="links"><a href="http://pizzamaker.dev/admin/ingredients/edit">Ingredients</a></td>
                            <td class="links"><a href="http://pizzamaker.dev/admin/ingredients">Ingredients</a></td>
                        </tr>
                        <tr>
                            <td class="links"><a href="http://pizzamaker.dev/admin/pads/create">Pads</a></td>
                            <td class="links"><a href="http://pizzamaker.dev/admin/pads/edit">Pads</a></td>
                            <td class="links"><a href="http://pizzamaker.dev/admin/pads">Pads</a></td>
                        </tr>
                        <tr>
                            <td class="links"><a href="http://pizzamaker.dev/admin/permissions/create">Permissions</a></td>
                            <td class="links"><a href="http://pizzamaker.dev/admin/permissions/edit">Permissions</a></td>
                            <td class="links"><a href="http://pizzamaker.dev/admin/permissions">Permissions</a></td>
                        </tr>
                        <tr>
                            <td class="links"><a href="http://pizzamaker.dev/admin/users/create">Users</a></td>
                            <td class="links"><a href="http://pizzamaker.dev/admin/users/edit">Users</a></td>
                            <td class="links"><a href="http://pizzamaker.dev/admin/users">Users</a></td>
                        </tr>
                        <tr>
                            <td class="links"><a href="http://pizzamaker.dev/admin/roles/create">Roles</a></td>
                            <td class="links"><a href="http://pizzamaker.dev/admin/roles/edit">Roles</a></td>
                            <td class="links"><a href="http://pizzamaker.dev/admin/roles">Roles</a></td>
                        </tr>
                        <tr>
                            <td class="links"><a href="http://pizzamaker.dev/admin/resources/create">Resources</a></td>
                            <td class="links"><a href="http://pizzamaker.dev/admin/resources/edit">Resources</a></td>
                            <td class="links"><a href="http://pizzamaker.dev/admin/resources">Resources</a></td>
                        </tr>

                        {{--@endif--}}

                    </table>
                </div>

            </div>
        </div>
    </body>
</html>
