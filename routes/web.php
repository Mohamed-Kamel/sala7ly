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

//FOR ADMIN
// Route::get('admin/login', function(){
//     return view('layouts.admin');
// });
// Route::get('ad/view', function(){
//     return view('admin.view');
// });
// Route::get('ad/form', function(){
//     return view('admin.form');
// });

Route::get('/ad/users', 'AdminController@users');
Route::get('/ad/users/{id}', 'AdminController@deleteUser');
Route::get('/ad/users/{id}/d', 'AdminController@restorUser');

//FOR ADMIN DASHBOARD
Route::get('/ad/dashboard', 'DashboardController@index');

//FOR ADMIN PAGE
Route::get('/ad/pages', 'PagesController@index');
Route::post('/ad/page/add', 'PagesController@addPage');
Route::post('/ad/pages/{id}', 'PagesController@editPage');
Route::get('/ad/page/delete/{id}', 'PagesController@deletePage');

//FOR ADMIN CATEGORIES
Route::get('/ad/categories', 'CategoriesController@index');
Route::post('/ad/cat/add', 'CategoriesController@addCat');
Route::post('/ad/cat/{id}', 'CategoriesController@editCat');
Route::get('/ad/cat/delete/{id}', 'CategoriesController@deleteCat');

//FOR ADMIN SETTINGS
Route::get('/ad/settings', 'SettingsController@index');
Route::post('/ad/setting/{id}', 'SettingsController@editSettings');


Route::get('/', 'HomeController@index');
Route::get('/faq', 'FaqController@index');
Route::get('/faq/add', 'FaqController@showFaqForm');
Route::post('/faq/add', 'FaqController@addFaq');
Route::get('/contactus', 'ContactusController@index');
Route::post('/contactus', 'ContactusController@send');

Route::get('/page/{id}', 'PageController@index');
Route::get("/company_details", "HomeController@company_details");

Route::post("/company_details", "HomeController@details");

Route::get('/company/{id}',  'CompanyController@index');
Route::post('/company/{id}', 'CompanyController@rate_company');


Route::get('/question/{id}', 'QuestionController@showQuestion');
Route::get('/search', 'SearchController@questions');

Route::post('/company/edit/profile', 'CompanyController@editProfile');


Route::get('/questions', 'QuestionController@index');

Route::get('/questions/cat/{id}', 'SearchController@catQuestions');

Route::get('/questions/search', 'SearchController@advancedSearch');

Route::post('/question', 'QuestionController@add_question');


Route::get('/companies', 'CompaniesController@index');
Route::get('/companies/search', 'CompaniesController@search');



Route::get('userProfile/{id}','UserController@showUserQuestions');
Route::post('userProfile/{id}','UserController@updateUser');


Route::post("/question/{id}", "comments@post");
Route::post("/question/{id}/mail", "comments@mailfunction");
Route::post('question/{id}/done','QuestionController@changeStatus');


// company in admin

Route::get('/ad/companies','AdminController@viewallcompanies');

Route::get('/ad/companies/{id}', 'AdminController@deleteUser');

Route::get('/ad/trashedcompanies','AdminController@trashedcompanies');

Route::get('/ad/trashedcompanies/{id}/restore','AdminController@restorUser');


// end company page in admin panel


//******************** admin-ratings *********************//
Route::get('ad/rate','RateCompany@view_rate');
Route::get('ad/rate/delete/{id}','RateCompany@deleteRate');

/**********************admin posts**************************/
Route::get('/ad/questions', 'Admin\AdminController@showQuestions');

Route::get('/ad/question/delete/{id}', 'Admin\AdminController@deleteQuestion');
Route::get('/ad/question/restore/{id}', 'Admin\AdminController@restoreQuestion');


/********************** Notificaiton **************************/
Route::get('MarkAllSeen','PostController@seen');
