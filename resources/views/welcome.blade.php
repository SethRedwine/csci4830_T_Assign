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
                <div class="title m-b-md">
                    Welcome to Seth's Server
                </div>
                <div class="links">
                    <a href="https://github.com/SethRedwine/csci4830_T_Assign">GitHub</a>
                </div>
                <br />
                <div class="heading">
                    Scroll down for the table
                </div>
            </div>
        </div>
        <div class="container">
            <form method="POST" action="add">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <div class="row">
                    <input type="text" id="playlistName" placeholder="Playlist Name" name="playlistName" required/>
                </div>
                <div class="row">
                    <input type="text" id="song0" placeholder="Song Name" name="song0" required/>
                    <input type="text" id="artist0" placeholder="Artist Name" name="artist0" required/>
                </div>
                <div class="row">
                    <input type="text" id="song1" placeholder="Song Name" name="song1" required/>
                    <input type="text" id="artist1" placeholder="Artist Name" name="artist1" required/>
                </div>
                <div class="row">
                    <input type="text" id="song2" placeholder="Song Name" name="song2" required/>
                    <input type="text" id="artist2" placeholder="Artist Name" name="artist2" required/>
                </div>
                <div class="row">
                    <input type="text" id="song3" placeholder="Song Name" name="song3" required/>
                    <input type="text" id="artist3" placeholder="Artist Name" name="artist3" required/>
                </div>
                <div class="row">
                    <input type="text" id="song4" placeholder="Song Name" name="song4" required/>
                    <input type="text" id="artist4" placeholder="Artist Name" name="artist4" required/>
                </div>
                <div class="row">
                    <input type="text" id="song5" placeholder="Song Name" name="song5" required/>
                    <input type="text" id="artist5" placeholder="Artist Name" name="artist5" required/>
                </div>
                <div class="row">
                    <input type="text" id="song6" placeholder="Song Name" name="song6" required/>
                    <input type="text" id="artist6" placeholder="Artist Name" name="artist6" required/>
                </div>
                <div class="row">
                    <input type="text" id="song7" placeholder="Song Name" name="song7" required/>
                    <input type="text" id="artist7" placeholder="Artist Name" name="artist7" required/>
                </div>
                <div class="row">
                    <input type="text" id="song8" placeholder="Song Name" name="song8" required/>
                    <input type="text" id="artist8" placeholder="Artist Name" name="artist8" required/>
                </div>
                <div class="row">
                <input type="text" id="song9" placeholder="Song Name" name="song9" required/>
                <input type="text" id="artist9" placeholder="Artist Name" name="artist9" required/>
                </div>
                <br />
                <div class="row">
                    <input type="submit" />
                </div>
            </form>
        </div>
        <div class="container">
            <h2 style="text-align: center">Playlist Table</h2>
            <p style="text-align: center">Here's a table that's hooked up to a database:</p>                                      
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
