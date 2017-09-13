<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    $playlists = DB::table('playlists')->get(); 
    $this->viewData['playlists'] = $playlists; 
    return view('welcome', $this->viewData); 
}); 


Route::post('/addPlaylist', function(Request $request) {
    $playlistName = $request->input('playlistName');
    $song0 = $request->input('song0');
    DB::insert('insert into playlists (playlistName, song0, artist0, song1, artist1, song2, artist2, song3, artist3, song4, artist4, song5, artist5, song6, artist6, song7, artist7, song8, artist8, song9, artist9) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [$playlistName, $song0, $artist0, $song1, $artist1, $song2, $artist2, $song3, $artist3, $song4, $artist4, $song5, $artist5, $song6, $artist6, $song7, $artist7, $song8, $artist8, $song9, $artist9]);

    return redirect('/');
});

Route::get('/deletePlaylist/{id}', function($id) {


    return redirect('/');
});