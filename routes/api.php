<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'company/'], function ($router) {

	$router->get('/','CompanyController@listCompanies');
	$router->post('/','CompanyController@createCompany');
	$router->get('/{id}','CompanyController@getCompany');
	$router->post('/{id}','CompanyController@editCompany');
	$router->delete('/{id}','CompanyController@deleteCompany');

});

Route::group(['prefix' => 'employees/'], function ($router) {

	$router->get('/','EmployeesController@listEmployees');
	$router->post('/','EmployeesController@createEmployee');
	$router->get('/{id}','EmployeesController@getEmployee');
	$router->post('/{id}','EmployeesController@editEmployee');
	$router->delete('/{id}','EmployeesController@deleteEmployee');

});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
