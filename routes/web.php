<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {

    #region Authentication
    Route::get('/login', function () {
        $app_env = env('APP_ENV');
        $target_url = '';
        if ($app_env == 'local') {
            $target_url = 'Location: http://127.0.0.1:8000/admin/dashboard';
        } elseif ($app_env == 'development') {
            $target_url = 'Location: https://dev-Legends.id/admin/dashboard';
        } elseif ($app_env == 'production') {
            $target_url = 'Location: https://Legends.com/admin/dashboard';
        }
        if (Auth::user()) {
            header($target_url);
            exit();
        }
        return view('admin.auth.login');
    })->name('admin.login');
    #endregion
    #region Dashboard
    #endregion
    Route::middleware(['auth'])->group(function () {
        #region Dashboard
        Route::resource('/dashboard', 'Dashboard\DashboardController');
        Route::post('/revenue', function (Request $request) {
            extract($request->all());
            $revenue = DB::table('revenues')->find($id);
            $response = [
                'data' => $revenue,
                'view' => view('admin.dashboard.revenue-detail', ['revenue' => $revenue])->render()
            ];

            return response()->json($response);
        });
        #endregion
        #region Master Data
    });
});
