<?php 
use Illuminate\Support\Facades\Route;

$middleware = config('laralte.middleware');
array_unshift($middleware , 'web');

Route::group(['prefix' => config('laralte.admin_url_prefix'), 'middleware' => $middleware, 'namespace' => 'App\Http\Controllers\Admin'], 
function(){

    // *********************
    // LaraLte defaults routes
    // *********************
    Route::get('/', 'AdminController@index')->name('admin.index'); 


    // Your custom routes.......




    //Admin profile routes
    Route::get('/profile', 'ProfileController@index') ->name('user.profile');
    Route::get('/profile/edit', 'ProfileController@profileEdit') ->name('profile.edit');
    Route::get('/profile/change-password', 'ProfileController@changePassword') ->name('profile.password');
    Route::post('/profile/{id}/update', 'ProfileController@updateEdit') ->name('profile.update');
    Route::post('/password/{id}/update', 'ProfileController@updatePassword') ->name('password.update');
});