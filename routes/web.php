<?php

use Illuminate\Support\Facades\Route;
    use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
    use Laravel\Fortify\Http\Controllers\ConfirmablePasswordController;
    use Laravel\Fortify\Http\Controllers\EmailVerificationPromptController;
    use Laravel\Fortify\Http\Controllers\NewPasswordController;
    use Laravel\Fortify\Http\Controllers\PasswordResetLinkController;
    use Laravel\Fortify\Http\Controllers\RegisteredUserController;
    use Laravel\Fortify\Http\Controllers\VerifyEmailController;

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

    Route::get('/', function () { return view('front.index'); })->name('index');
    Route::get('/kurumsal', function () { return view('front.about'); })->name('about');
    Route::get('/hasar', function () { return view('front.damage'); })->name('damage');
    Route::get('/iletisim', function () { return view('front.contact'); })->name('contact');
    Route::get('/sayfa-bulunamadi', function () { return view('front.notFound'); })->name('notFound');
    Route::post('/iletisim', [App\Http\Controllers\SiteController::class, 'contactSubmit'])->name('contact.submit');
    Route::post('/teklif-al', [App\Http\Controllers\SiteController::class, 'offerSubmit'])->name('offer.submit');
    Route::get('/urunler/{seflink}', [App\Http\Controllers\SiteController::class, 'productsShow'])->name('front.products.show');
    Route::get('/urunler', [App\Http\Controllers\SiteController::class, 'productsList'])->name('front.products.index');
    Route::get('/referanslar', [App\Http\Controllers\SiteController::class, 'referencesList'])->name('front.references.index');
    Route::get('/sitemap', [\App\Http\Controllers\siteController::class, 'sitemap'])->name('sitemap');
    Route::prefix('yonetimpaneli')->group(function ()
    {
        Route::get('/', function () {
            return view('auth.login');
        });

        Route::get('/register', [RegisteredUserController::class, 'create'])
            ->middleware('guest')
            ->name('register');

        Route::post('/register', [RegisteredUserController::class, 'store'])
            ->middleware('guest');

        Route::get('/login', [AuthenticatedSessionController::class, 'create'])
            ->middleware('guest')
            ->name('login');

        Route::post('/login', [AuthenticatedSessionController::class, 'store'])
            ->middleware('guest');

        Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
            ->middleware('guest')
            ->name('password.request');

        Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
            ->middleware('guest')
            ->name('password.email');

        Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
            ->middleware('guest')
            ->name('password.reset');

        Route::post('/reset-password', [NewPasswordController::class, 'store'])
            ->middleware('guest')
            ->name('password.update');

        Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
            ->middleware('auth')
            ->name('verification.notice');

        Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
            ->middleware(['auth', 'signed', 'throttle:6,1'])
            ->name('verification.verify');

        Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
            ->middleware(['auth', 'throttle:6,1'])
            ->name('verification.send');

        Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
            ->middleware('auth')
            ->name('password.confirm');

        Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
            ->middleware('auth');

        Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
            ->middleware('auth')
            ->name('logout');

        Route::middleware(['auth:sanctum', 'verified'])->group(function ()
        {
            Route::get('/dashboard', function () {
                return view('dashboard');
            })->name('dashboard');
            Route::get('user/datatables', [App\Http\Controllers\usersController::class, 'datatable'])->name('users.datatables');
            Route::get('user/destroy/{id}', [App\Http\Controllers\usersController::class, 'destroy'])->name('user.destroy');
            Route::get('reference/datatables', [App\Http\Controllers\ReferencesController::class, 'datatable'])->name('references.datatables');
            Route::get('reference/destroy/{id}', [App\Http\Controllers\ReferencesController::class, 'destroy'])->name('reference.destroy');
            Route::get('products/datatables', [App\Http\Controllers\ProductsController::class, 'datatable'])->name('products.datatables');
            Route::get('products/destroy/{id}', [App\Http\Controllers\ProductsController::class, 'destroy'])->name('product.destroy');
            Route::resource('users', App\Http\Controllers\usersController::class);
            Route::resource('settings', App\Http\Controllers\SettingsController::class);
            Route::resource('references', App\Http\Controllers\ReferencesController::class);
            Route::resource('products', App\Http\Controllers\ProductsController::class);
        });
    });

