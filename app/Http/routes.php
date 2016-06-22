<?php

Route::get('/', ['as' => 'welcome', function () {
    return view('welcome');
}]);

Route::get('/concept', ['as' => 'concept', function () {
    return view('concept');
}]);

Route::get('/about-us', ['as' => 'about', function () {
    return view('about');
}]);

Route::get('/ils-parlent-de-nous', ['as' => 'presse', function () {
    return view('presse');
}]);

Route::get('/faq', ['as' => 'faq',  function () {
    return view('faq');
}]);

// Je crée un group de Route
// derriere le prefixe movies en URI
Route::group(['prefix' => 'movies', 'as' => 'movies.'], function () {

    // route en GET
    Route::get('/index', [
                'as'   => 'index',
                'uses' => 'MoviesController@index',
              ]);

    Route::get('/creer', ['as' => 'creer',  function () {
        return view('movies/creer');
    }]);

    Route::get('/editer', ['as' => 'editer',  function () {
        return view('movies/editer');
    }]);

    Route::get('/voir', ['as' => 'voir',  function () {
        return view('movies/voir');
    }]);
});








// Route contact
Route::get('/contact', 'PagesController@contact');

    // Route send contact
    Route::post('/send-contact', 'PagesController@sendMail');
