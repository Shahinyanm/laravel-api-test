<?php

use Illuminate\Support\Facades\Route;
use Modules\Backend\User\Http\Actions\ViewBackendUserAction;
use Modules\Backend\User\Http\Actions\QueryBackendUserAction;
use Modules\Backend\User\Http\Actions\CreateBackendUserAction;
use Modules\Backend\User\Http\Actions\DeleteBackendUserAction;
use Modules\Backend\User\Http\Actions\UpdateBackendUserAction;

Route::name('backend.user')->prefix('backend/user')->middleware(['api', 'auth'])->group(function () {
    Route::name('query')->get('/', QueryBackendUserAction::class);
    Route::name('create')->post('/', CreateBackendUserAction::class);

    Route::prefix('{id}')->where(['id' => '[0-9]+'])->group(function () {
        Route::name('view')->get('/', ViewBackendUserAction::class);
        Route::name('update')->put('/', UpdateBackendUserAction::class);
        Route::name('delete')->delete('/', DeleteBackendUserAction::class);
    });
});
