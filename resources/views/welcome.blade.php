<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Links -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
                font-size: 60px;
            }

            .heading {
                font-size: 24px;
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
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="heading">
                    Hello World!
                </div>
                <div class="title m-b-md">
                    Welcome to Seth's Server
                </div>

                <div class="links">
                    <span> Info on the Framework: </span>
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
        <div class="container">
            <form method="POST" action="/addPlaylist">
                {{csrf_field()}}
                <input type="text" class="form-control" id="playlistName" placeholder="Playlist Name" name="playlistName" required/>
                <input type="text" class="form-control" id="song0" placeholder="Song Name" name="song0" required/>
                <input type="text" class="form-control" id="artist0" placeholder="SoArtistng Name" name="artist0" required/>
            </form>
        </div>
        <div class="container">
            <h2 style="text-align: center">Table</h2>
            <p style="text-align: center">Here's a table that will eventually be hooked up to a database:</p>                                      
            <div class="table-responsive">          
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Playlist Name</th>
                            <th>Song</th>
                            <th>Artist</th>
                            <th>Song</th>
                            <th>Artist</th>
                            <th>Song</th>
                            <th>Artist</th>
                            <th>Song</th>
                            <th>Artist</th>
                            <th>Song</th>
                            <th>Artist</th>
                            <th>Song</th>
                            <th>Artist</th>
                            <th>Song</th>
                            <th>Artist</th>
                            <th>Song</th>
                            <th>Artist</th>
                            <th>Song</th>
                            <th>Artist</th>
                            <th>Song</th>
                            <th>Artist</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($playlists as $playlist)
                        <tr>
                            <td>{{$playlist->id}}</td>
                            <td>{{$playlist->playlistName}}</td>
                            <td>{{$playlist->song0}}</td>
                            <td>{{$playlist->artist0}}</td>
                            <td>{{$playlist->song1}}</td>
                            <td>{{$playlist->artist1}}</td>
                            <td>{{$playlist->song2}}</td>
                            <td>{{$playlist->artist2}}</td>
                            <td>{{$playlist->song3}}</td>
                            <td>{{$playlist->artist3}}</td>
                            <td>{{$playlist->song4}}</td>
                            <td>{{$playlist->artist4}}</td>
                            <td>{{$playlist->song5}}</td>
                            <td>{{$playlist->artist5}}</td>
                            <td>{{$playlist->song6}}</td>
                            <td>{{$playlist->artist6}}</td>
                            <td>{{$playlist->song7}}</td>
                            <td>{{$playlist->artist7}}</td>
                            <td>{{$playlist->song8}}</td>
                            <td>{{$playlist->artist8}}</td>
                            <td>{{$playlist->song9}}</td>
                            <td>{{$playlist->artist9}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
