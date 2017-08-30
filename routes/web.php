<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});



$app->group(['prefix' => 'api/v1'], function() use ($app){

	$app->get('companies','CompaniesController@index');
 
	$app->get('companies/{id}','CompaniesController@getCompanies');
	 
	$app->post('companies','CompaniesController@createCompanies');
	 
	$app->put('companies/{id}','CompaniesController@updateCompanies');
	 
	$app->delete('companies/{id}','CompaniesController@deleteCompanies');
});
