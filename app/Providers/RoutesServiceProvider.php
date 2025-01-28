<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as BaseServiceProvider;
use Illuminate\Support\Facades\Route;

class RoutesServiceProvider extends BaseServiceProvider
{
    public function map()
    {
        $this->mapUserRoutes();
        $this->mapStaffRoutes();
        $this->mapAdminRoutes();
        $this->mapSystemRoutes();
    }

    protected function mapUserRoutes()
    {
        Route::prefix('api')
            ->middleware(['api'])
            ->namespace('App\Http\Controllers\Api')
            ->group(base_path('routes/user.php'));
    }
    protected function mapStaffRoutes()
    {
        Route::prefix('api')
            ->middleware(['api'])
            ->namespace('App\Http\Controllers\Api')
            ->group(base_path('routes/staff.php'));
    }
    protected function mapAdminRoutes()
    {
        Route::prefix('api')
            ->middleware(['api'])
            ->namespace('App\Http\Controllers\Api')
            ->group(base_path('routes/admin.php'));
    }
    protected function mapSystemRoutes()
    {
        Route::prefix('api')
            ->middleware(['api'])
            ->namespace('App\Http\Controllers\Api')
            ->group(base_path('routes/system.php'));
    }
}
