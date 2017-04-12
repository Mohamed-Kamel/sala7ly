<?php
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




Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/faq', 'FaqController@index');
Route::get('/page/{id}', 'PageController@index');
Route::get("/company_details", "HomeController@company_details");

Route::post("/company_details", "HomeController@details");

Route::get('/company/{id}',  'CompanyController@index');
Route::post('/company/{id}', 'CompanyController@rate_company');


Route::get('/question/{id}', 'QuestionController@showQuestion');
Route::get('/search', 'SearchController@questions');

Route::post('/company/edit/profile', 'CompanyController@editProfile');


Route::get('/questions', 'QuestionController@index');

Route::post('/question', 'QuestionController@add_question');


Route::get('/companies', 'CompaniesController@index');
Route::get('/companies/search', 'CompaniesController@search');



Route::get('userProfile/{id}','UserController@showUserQuestions');
Route::post('userProfile/{id}','UserController@updateUser');


Route::post("/question/{id}", "comments@post");
Route::post("/question/{id}/mail", "comments@mailfunction");
Route::post('question/{id}/done','QuestionController@changeStatus');