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

Route::get('/', function () {
    return view('pages.auth.login');
});

Auth::routes();

Route::match(["GET", "POST"], "/register", function () {
    return redirect("/login");
})->name("register");

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::get('/pengaturan', 'SettingController@index')->name('pengaturan.index');

Route::put('/pengaturan/periode/{id}', 'SettingController@updatePeriode')->name('pengaturan.periode');

Route::resource('users', 'UserController');

Route::resource('surat-masuk', 'SuratMasukController');

Route::resource('surat-keluar', 'SuratKeluarController');
