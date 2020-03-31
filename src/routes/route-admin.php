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


});