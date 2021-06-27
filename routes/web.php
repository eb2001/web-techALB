<?php

Route::redirect('/', '/login');
//Language
Route::get('lang/{lang}','LanguageController@switchLang')->name('lang.switch');
Route::get('/languageDemo', 'App\Http\Controllers\HomeController@languageDemo');

//index
Route::get('/index', function () {
    return view('index');
})->name('index');

//Feedback
// Route::post('/feedback', function () {
//     return view('feedback');
// })->name('feedbackpost');

Route::get('/feedback', function () {
    return view('feedback');
})->name('feedback');



Route::redirect('/home', '/admin');
Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');


});
