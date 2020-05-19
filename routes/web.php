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

Route::get('surat-masuk/export', 'SuratMasukController@export')->name('surat-masuk.export');

Route::resource('surat-masuk', 'SuratMasukController');

Route::get('surat-keluar/export', 'SuratKeluarController@export')->name('surat-keluar.export');

Route::resource('surat-keluar', 'SuratKeluarController');
