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
            // Get all request parameters
            $start_periode = $request->input('start_periode');
            $end_periode = $request->input('end_periode');

            // Build the query using Laravel's query builder
            $revenue = DB::table('revenues')
                ->selectRaw('
        SUM(therapist) AS therapist,
        SUM(nona) AS nona,
        SUM(kitchen) AS kitchen,
        SUM(beverage) AS beverage,
        SUM(paket) AS paket,
        SUM(minol) AS minol,
        SUM(wine) AS wine,
        SUM(cigarettes) AS cigarretes,
        SUM(cerutu) AS cerutu,
        SUM(minibar) AS minibar,
        SUM(room) AS room,
        SUM(lostnbrake) AS lostnbrake
    ')
                ->where('jt', '>=', $start_periode)
                ->where('jt', '<=', $end_periode)
                ->get();

            $response = [
                'data' => $revenue,
                'view' => view('admin.dashboard.revenue-detail', compact('revenue'))->render()
            ];

            return response()->json($response);
        });
        #endregion
        #region Master Data
    });
});
