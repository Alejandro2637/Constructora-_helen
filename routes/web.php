<?php

use App\Http\Controllers\EmailController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\TwoFactor;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

Route::get('/', function () {
    return view('index');
})->name('inicio');

Route::get('/Nosotros', function () {
    return view('Nosotros');
})->name('nosotros');

Route::get('/Servicios', function () {
    return view('Servicios');
})->name('servicio');

Route::get('/Proyectos', function () {
    return view('Proyectos');
})->name('proyectos');

Route::get('/Contactos', function () {
    return view('Contactos');
})->name('contacto');
/*-----------------------------------------------------*/
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('profile.edit');
    Route::get('settings/password', Password::class)->name('user-password.edit');
    Route::get('settings/appearance', Appearance::class)->name('appearance.edit');

    Route::get('settings/two-factor', TwoFactor::class)
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
});
/*-------------------------------------------------------------------------------------------*/
Route::post('/contacto/enviar',[EmailController::class,'enviar'])->name('contacto.enviar');