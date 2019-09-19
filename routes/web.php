<?php

use Illuminate\Support\Facades\Input;
use App\Ministry;
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
    return view('welcome');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'middlware' => 'auth'], function () {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('ministry', 'MinistryController');
    Route::resource('nirdeshanalaya', 'NirdeshanalayaController');
    Route::resource('karyalaya', 'KaryalayaController');
    Route::resource('taha', 'TahaController');
    Route::resource('pad', 'PadController');
    Route::resource('shreni', 'ShreniController');
    Route::resource('employee', 'EmployeeController');
    Route::resource('employeerecord', 'EmployeerecordController');
    Route::resource('sewa', 'SewaController');
    Route::resource('samuha', 'SamuhaController');
    Route::resource('upasamuha', 'UpasamuhaController');
    // routes fors employee personal records
    Route::resource('employeepersonaldetail', 'EmployeePersonalDetailController');
    // routes for employeeallrecords
    Route::resource('employeeallrecords', 'EmployeeAllRecordController');
    Route::get('/employee/operate/{id}', 'EmployeeAllRecordController@operate')->name('employeeallrecords.operate');
    Route::post('/operate/employee', [
        'uses' => 'EmployeeAllRecordController@storeActivity',
        'as' => 'employeeallrecord.storeActivity'
    ]);

    Route::get('/employees/operate/{id}', 'EmployeerecordController@operate')->name('employeerecord.operate');
    Route::post('/operate', [
        'uses' => 'EmployeerecordController@storeActivity',
        'as' => 'employeerecord.storeActivity'
    ]);
    Route::post('/dynamic/fetch', 'DynamicController@fetch')->name('dynamic.fetch');
    Route::post('/dynamic/fetch_karyalaya_darbandi', 'DynamicController@fetch_karyalaya_darbandi')->name('dynamic.fetch.check_no_of_pads');


    Route::get('/employee/report/{id}', 'EmployeerecordController@viewreport')->name('employeerecord.view_employee_report');


    Route::post('employee/search', [
        'uses' => 'SearchController@searchEmployee',
        'as' => 'employee.search'
    ]);

    Route::post('karyalaya/search', [
        'uses' => 'SearchController@searchKaryalaya',
        'as' => 'karyalaya.search'
    ]);
    Route::get('/karyalaya/report/{id}', [
        'uses' => 'KaryalayaController@viewreport',
        'as' => 'karyalaya.view_karyalaya_report'
    ]);

    Route::get('/karyalaya/detailreport/{id}', [
        'uses' => 'KaryalayaController@viewdetailreport',
        'as' => 'karyalaya.view_detail_karyalaya_report',
    ]);

    Route::get('allkaryalaya/print', [
        'uses' => 'KaryalayaController@print_all_karyalayas',
        'as' => 'karyalaya.print'
    ]);
    // this is to get the list of karyalayas of ministry
    Route::get('/ministry/report/{id}', [
        'uses' => 'MinistryController@viewreport',
        'as' => 'ministry.view_ministry_report'
    ]);

    // this is to get the karyalaya detail  of ministry
    Route::get('/ministry_karyalayas/report/{id}', [
        'uses' => 'KaryalayaController@viewkaryalayareport',
        'as' => 'ministry_karyalaya.view_karyalaya_report'
    ]);


    // report  pad wise
    Route::get('/pads/report', [
        'uses' => 'PadController@viewpadreport',
        'as' => 'pad.view_report'
    ]);
    // ministry report
    Route::get('/ministries/report', [
        'uses' => 'MinistryController@viewMinistryReport',
        'as' => 'ministry.view_report'
    ]);

    Route::get('/employee/allreport/{id}', 'EmployeeAllRecordController@view_employee_report')->name('employeeallrecord.view_employee_report');
});
