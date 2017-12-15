<?php
Route::get('/', 'HomeController@welcome');
$this::get('/home', 'HomeController@index')->name('home');

//Posteos Route
Route::get('/posteos', 'PosteosController@index');
Route::get('/posteos/agregar', 'PosteosController@create'); //se puede dejar la misma vista para los 2??
Route::post('/posteos/agregar', 'PosteosController@store');
//Administrador Posteos Routes
Route::get('/admin/posteos/{id}', 'PosteosController@show');
Route::delete('/admin/posteos/{id}', 'PosteosController@destroy'); //desactivar y no borrar


//Administrador Servicios Route
Route::get('/admin/service', 'Admin\ServicesController@index');//fait
Route::get("/admin/service/agregarService", 'Admin\ServicesController@create');//fait
Route::post("/admin/service/agregarService", 'Admin\ServicesController@store');//fait
// Route::get('/admin/service/{id}', 'Admin\ServicesController@show');//fait N'est plus pris en compte la vue show si avec le lien qui est dans index
Route::delete('/admin/service/{id}', 'Admin\ServicesController@destroy');//fait
Route::get("/admin/service/{id}", 'Admin\ServicesController@edit'); // fait
Route::patch("/admin/service/{id}", 'Admin\ServicesController@update');// fait mais manque erreurs

Route::get("/service/category/{id}", 'ServicesController@mostrar');//fait
//Precio Route
Route::get('/precios', 'ServicesController@consultarPrecio');//fait

//Administrador category Route
Route::get('/admin/categories', 'Admin\CategoriesController@index');//fait
Route::get('/admin/categories/agregarCategory', 'Admin\CategoriesController@create');//fait
Route::post('/admin/categories/agregarCategory', 'Admin\CategoriesController@store');//fait
// Route::get('/admin/categories/{id}', 'Admin\CategoriesController@show'); //ok
Route::get('/admin/categories/{id}', 'Admin\CategoriesController@edit'); //je ne peux pas garder les images
Route::patch("/admin/categories/{id}", 'Admin\CategoriesController@update'); //fait



//admin Precio Routes
// Route::get('/admin/price/mostrar', 'PricesController@index'); //quel est l'intérêt? la route existe déjà
// Route::get('/admin/price/{id}', 'PricesController@show');
Route::get("/admin/price", 'PricesController@edit');//attention je ne peux pas à cause des multiples input
Route::patch("/admin/price", 'PricesController@update');//y'a une erreur mais ne sais pas où


// //Articulos Routes
// Route::get("/articulosNutricion", 'ArticulosController@leer');
// Route::get("/articuloNutricion1", function() {
//   return view("articuloNutricion1");
// });
// Route::get("/articulosBelleza", function() {
//   return view("articulosBelleza");
// });
// Route::get("/articuloMaquillaje1", function() {
//   return view("articuloMaquillaje1");
// });
// Route::get("/articuloPeinado1", function() {
//   return view("articuloPeinado1");
// });
// Route::get("/articulosAsesoria1", function() {
//   return view("articulosAsesoria1");
// });
// //v
// Route::get("/articulo", function() {
//   return view("articulo");
// });
//
// Route::get("/articulosMaquillaje", function() {
//   return view("articulosMaquillaje");
// });
// Route::get("/articulosNutricion", function() {
//   return view("articulosNutricion");
// });

//articulos routes
Route::get('/article/category', 'ArticulosController@index');// fait ok pour les dates
Route::get('/article/category/{id}', 'ArticulosController@listar'); //fait mais le footer sort de ses gonds
Route::get('/article/{id}', 'ArticulosController@show');//fait

//admin articulos routes
Route::get('/admin/article', 'Admin\ArticulosController@index');//fait
Route::get('/admin/article/agregarArticulo', 'Admin\ArticulosController@create');//fait
Route::post('admin/article/agregarArticulo', 'Admin\ArticulosController@store');//fait
// Route::get('/admin/article/{id}', 'Admin\ArticulosController@show');//fait N'est plus pris en compte la vue show
Route::get("/admin/article/{id}", 'Admin\ArticulosController@edit'); //fait
Route::patch("/admin/article/{id}", 'Admin\ArticulosController@update');// fait mais manque erreurs
Route::delete('/admin/article/{id}', 'Admin\ArticulosController@destroy');//fait

// galeria Route
Route::get("/galeria", function() {
  return view("front.galeria");
});

//admin galeria route
Route::get('/galeria', 'FotosController@index'); //ok
Route::get('/admin/galeria/agregar', 'FotosController@create');
Route::post('/admin/galeria/agregar', 'FotosController@store');//je n'arrive pas à garder certaines photos!!!!!!!!!!!!
Route::get('/galeria/{id}', 'FotosController@mostrar');//fait



Route::get("/quienSoy", function() {
  return view("quienSoy");
});

Route::get("/contacto", function() {
  return view("contacto");
});

Auth::routes();
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

 // Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');


Route::get('/home', 'HomeController@index')->name('home');
