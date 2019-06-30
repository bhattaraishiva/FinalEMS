<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; 
use App\Employee;
use Auth;
use App\Sewa;
use App\Pad;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
        // $uemail=Auth::user()->name;
        // View::share('employees',Employee::where('id',1)->get());
        View::share('pads',Pad::where('status',0)->get());
        View::share('sewas',Sewa::all());

    }
}
