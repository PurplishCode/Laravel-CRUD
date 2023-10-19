<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
class RouteServiceProvider extends ServiceProvider
{
    protected $namespace = 'App\Http\Controllers';
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
            
                Route::prefix('testing')->group(base_path("routes/test.php")); // Here defining the routing. The prefix is basically Routings like middleware in Express.. The group(base_url()) defines the group of that middlware, which means it can ONLY be accessed for that specific middleware.)
        Route::prefix('student')->group(function(){
        Route::get('/show', [studentController::class, 'showInput']); // It's quite different for defining Route with controllers instead of generic Route.
          
    });
            });
    }
}
