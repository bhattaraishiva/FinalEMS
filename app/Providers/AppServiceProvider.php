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
// use Illuminate\Support\Facades\Auth;

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

            // $system_user_id = Auth::check() ? Auth::user()->id : null;
        // $system_user_id = Auth::user();
        //     dd($system_user_id);

        $employees=EmployeeCurrentRecord::where('employee_status',1)->get();
        $emp_count = $employees->count();

        // $system_user_data_entry =EmployeeCurrentRecord::where('system_user_id',$system_user_id)->get();
        // $system_user_data_entry_count= $system_user_data_entry->count();

        View::share('employee_count',$emp_count);
        View::share('pads',Pad::where('status',0)->get());
        View::share('sewas',Sewa::all());
        // View::share('system_user_data_entry_count',$system_user_data_entry_count);
    }
}
