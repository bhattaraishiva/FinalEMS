<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Employee;
use Auth;
use App\Sewa;
use App\Pad;
use View;
use App\EmployeePersonalDetail;
use App\EmployeeCurrentRecord;

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
       $employees=EmployeeCurrentRecord::where('employee_status',1)->get();
       $emp_count = $employees->count();
       View::share('employee_count',$emp_count);
        View::share('pads',Pad::where('status',0)->get());
        View::share('sewas',Sewa::all());

    }
}
