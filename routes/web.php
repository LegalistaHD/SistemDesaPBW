<?php

use App\Models\DisposisiSurat;
use App\Models\SuratEksternal;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\DisposisiSuratController;
use App\Http\Controllers\SuratEksternalController;



Route::get('/', [AuthController::class, 'login']);
Route::post('/', [AuthController::class, 'auth_login']);
Route::get('/register', [AuthController::class, 'regist']);
Route::post('/register', [AuthController::class, 'store']);


Route::get('logout', [AuthController::class, 'logout']);

Route::group(['middleware' => 'useradmin'], function () {

    Route::get('panel/dashboard', [DashboardController::class, 'dashboard'])->name('panel.dashboard');

    Route::get('panel/users', [UsersController::class, 'users']);
    Route::get('panel/users/add', [UsersController::class, 'add']);
    Route::post('panel/users/add', [UsersController::class, 'insert']);
    Route::get('panel/users/edit/{id}', [UsersController::class, 'edit']);
    Route::post('panel/users/edit/{id}', [UsersController::class, 'update']);
    Route::get('panel/users/delete/{id}', [UsersController::class, 'delete']);

    Route::get('panel/roles', [RoleController::class, 'list']);
    Route::get('panel/roles/add', [RoleController::class, 'add']);
    Route::post('panel/roles/add', [RoleController::class, 'insert']);
    Route::get('panel/roles/edit/{id}', [RoleController::class, 'edit']);
    Route::post('panel/roles/edit/{id}', [RoleController::class, 'update']);
    Route::get('panel/roles/delete/{id}', [RoleController::class, 'delete']);

    Route::get('panel/surat', [SuratController::class, 'surat']);
    Route::get('panel/suratAll', [SuratController::class, 'showAll']);

    Route::get('panel/settings', [SettingsController::class, 'settings']);
    Route::post('panel/settings/update-current-role/{id}', [SettingsController::class, 'updateCurrentRole'])->name('update-current-role');

    //Validasi dan Pelaporan A4
    Route::post('panel/validasi-operator/{id}', [SuratController::class, 'validateByOperator'])->name('letters.validate.operator');
    Route::post('panel/validasi-note/{id}', [SuratController::class, 'validateNote'])->name('letters.note');
    Route::get('panel/history-surat/', [SuratController::class, 'historySurat'])->name('history');
    Route::get('panel/validasi-sekdes/', [SuratController::class, 'letterSekdes'])->name('letters.sekdes');
    Route::put('panel/validasi-sekdes/{id}', [SuratController::class, 'validateBySekdes'])->name('letters.validate.sekdes');
    Route::put('/letters/validate-sekdes/{id}', [SuratController::class, 'validateSekdes'])->name('letters.validate.sekdes');
    Route::put('/letters/assign-nomor/{id}', [SuratController::class, 'assignNomorSurat'])->name('letters.assign.nomor');
    Route::get('panel/validasi-kades/', [SuratController::class, 'lettersKades'])->name('letters.Kades');
    Route::get('panel/validasi-kades', [SuratController::class, 'letterKades'])->name('letters.kades');
    Route::put('/letters/validate-kades/{id}', [SuratController::class, 'validateKades'])->name('letters.validate.kades');
    Route::get('panel/surat-tervalidasi/', [SuratController::class, 'validasiSudahTTD'])->name('surat.tervalidasi');
    Route::get('panel/pelaporan', [ChartController::class, 'index']);


    Route::get('panel/suratEksternal', [SuratEksternalController::class, 'showAll']);
    Route::get('panel/suratEksternal/add', [SuratEksternalController::class, 'showAddForm']);
    Route::post('panel/suratEksternal/add', [SuratEksternalController::class, 'store']);
    Route::get('panel/suratEksternal/showSurat/{id}', [SuratEksternalController::class, 'showSurat']);
    Route::get('panel/suratEksternal/edit/{id}', [SuratEksternalController::class, 'showEditForm']);
    Route::post('panel/suratEksternal/edit/{id}', [SuratEksternalController::class, 'edit']);
    Route::get('panel/suratEksternal/delete/{id}', [SuratEksternalController::class, 'delete']);

    Route::get('panel/disposisiSurat', [DisposisiSuratController::class, 'showAll']);
    Route::get('panel/disposisiSurat/add', [DisposisiSuratController::class, 'showAddForm']);
    Route::post('panel/disposisiSurat/add', [DisposisiSuratController::class, 'store']);
});


//A3 Templating Surat
Route::get('/buatsurat', [SuratController::class, 'buatsurat']);
Route::resource('/profile', UserProfileController::class);
Route::post('/formsurat', [SuratController::class, 'inputansurat']);
Route::post('/submitsurat', [SuratController::class, 'submitSurat']);
Route::get('/surat/{id}', [SuratController::class, 'detail'])->name('surat.detail');
Route::get('/generate-PDF/{id}', [SuratController::class, 'generatePDF']);
// Route::get('/historysurat', [SuratController::class, 'HistorySuratUser']);
