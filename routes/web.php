<?php

use App\Http\Controllers\MusicController;
use App\Models\Album;
use App\Models\Music;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;


Route::resource('albums', AlbumController::class);

Route::get('/', function (Request $request) {
   return "view('welcome')";
});

Route::get('/users', function () {
    $users = User::all();
    Log::info('Chamei rota user');
    // $pdo->query("SELECT * FROM users;") 
    return $users;
});


Route::get('/musics', function () {
   $musics = Music::all();
    return $musics;
});

Route::get('/create-test-music', function (Request $request) {
    $music = Music::create([
        'name' => $request->name,
        'artist' => $request->artist,
        'album' => $request->album,
        'duration' => $request->duration,
    ]);
     return $music;
 });

Route::get('/create-test-album', function () {
    $album = Album::create([
        'nome' => 'Abbey Road',
        'artista' => 'The Beatles',
        'ano_lancamento' => 1969,
        'url_imagem' => 'https://upload.wikimedia.org/wikipedia/en/4/42/Beatles_-_Abbey_Road.jpg',
    ]);
    return $album;
});

Route::get('/albuns', function () {
    $albuns = Album::all();
    return $albuns;
});
