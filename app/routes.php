<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function () {
    return View::make('index');
});

// Route::get('/sky-admin', function () {
//     return View::make('admin.index', array('title' => 'Administrator Skygami', 'active_dashboard' => 'active', 'active_game' => '', 'active_game_add' => '');
// });

Route::get('/sky-admin', function () {
    return View::make('admin.index', array('title' => 'Add game', 'active_dashboard' => '', 'active_game' => 'active', 'active_game_add' => 'active'));
});
Route::get('/add-game', function () {
    return View::make('admin.game.add', array('title' => 'Add game', 'active_dashboard' => '', 'active_game' => 'active', 'active_game_add' => 'active'));
});
Route::post('/add-game', function () {
    // $game = new Game();
    // $game->game_title = Input::get('title');
    // $game->game_content = Input::get('content');
    // $game->game_slug = Input::get('slug');
    // $game->game_excerpt = Input::get('excerpt');
    // $game->game_guid = Input::get('guid');
    // // $game->game_url = Input::get('url');
    // $game->save();
    // // return Redirect::to('/add-game');

//    $game_meta = new GameMeta();
    //  $game_meta->game_id = Input::get('title');
});

Route::get('get', function () {
    foreach (Game::all() as $g) {
        echo $g->game_id."<br/>";
    };
    
    $bg = Game::get();
    echo $bg[0]->game_content;


    Game::destroy(2);
});
