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
    $playlists=DB::table('playlists')->get(); 
    $this->viewData['playlists']=$playlists; 
    return view('welcome', $this->viewData); 
}); 


Route::post('/public', function(Request $request) {
    dd($request);
    $playlistName=$request->input('playlistName');
    $song0=$request->input('song0');
    $artist0=$request->input('artist0');
    $song1=$request->input('song1');
    $artist1=$request->input('artist1');
    $song2=$request->input('song2');
    $artist2=$request->input('artist2');
    $song3=$request->input('song3');
    $artist3=$request->input('artist3');
    $song4=$request->input('song4');
    $artist4=$request->input('artist4');
    $song5=$request->input('song5');
    $artist5=$request->input('artist5');
    $song6=$request->input('song6');
    $artist6=$request->input('artist6');
    $song7=$request->input('song7');
    $artist7=$request->input('artist7');
    $song8=$request->input('song8');
    $artist8=$request->input('artist8');
    $song9=$request->input('song9');
    $artist9=$request->input('artist9');
    
    // // DB::insert('insert into playlists (playlistName, song0, artist0, song1, artist1, song2, artist2, song3, artist3, song4, artist4, song5, artist5, song6, artist6, song7, artist7, song8, artist8, song9, artist9) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [$playlistName, $song0, $artist0, $song1, $artist1, $song2, $artist2, $song3, $artist3, $song4, $artist4, $song5, $artist5, $song6, $artist6, $song7, $artist7, $song8, $artist8, $song9, $artist9]);
    DB::table('playlists')->insert([
        [
            'id'=>1,
            'playlistName'=>$playlistName,
            'song0'=>$song0,
            'artist0'=>$artist0,
            'song1'=>$song1,
            'artist1'=>$artist1,
            'song2'=>$song2,
            'artist2'=>$artist2,
            'song3'=>$song3,
            'artist3'=>$artist3,
            'song4'=>$song4,
            'artist4'=>$artist4,
            'song5'=>$song5,
            'artist5'=>$artist5,
            'song6'=>$song6,
            'artist6'=>$artist6,
            'song7'=>$song7,
            'artist7'=>$artist7,
            'song8'=>$song8,
            'artist8'=>$artist8,
            'song9'=>$song9,
            'artist9'=>$artist9
        ]
    ]);

    return redirect('/');
});

Route::get('/public/{id}', function($id) {


    return redirect('/');
});