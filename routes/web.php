<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ModelController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

// NOTA: Esto es el ejercicio 4.
Route::group(['prefix' => '/cart'], function () {
    Route::get('/', [CartController::class, 'cart']); //Obtengo todos los carritos
    Route::get('/{id}', [CartController::class, 'cartId']); //Obtengo un carrito por id
    Route::post('/{id}/product', [CartController::class, 'cartIdProduct']); //Añado un producto a un carrito
    Route::put('/{id}/product', [CartController::class, 'cartIdProductAdd']); //Actualizo un producto a un carrito
    Route::delete('/{id}/line/{id_line}', [CartController::class, 'cartIdProductDelete']); //Borro un producto de un carrito
    Route::post('/{id}/coupon', [CartController::class, 'cartIdCoupon']); //Añado un cupón a un carrito
    Route::put('/{id}/coupon', [CartController::class, 'cartIdCouponAdd']); //Actualizo un cupón a un carrito (no sé si es necesario
    Route::delete('/{id}/coupon', [CartController::class, 'cartIdCouponDelete']); //Borro un cupón de un carrito
});

/* NOTA: Esto está comentado porque es el ejercicio 1 y 2 y lo del ejercicio 4 lo sustituye
Route::post('/cart', [CartController::class, 'cart']);
Route::get('/cart/{id}', [CartController::class, 'cartId']);
Route::post('/cart/{id}/product', [CartController::class, 'cartIdProduct']);
Route::put('/cart/{id}/product', [CartController::class, 'cartIdProductAdd']);
Route::delete('/cart/{id}/line/{id_line}', [CartController::class, 'cartIdProductDelete']);
Route::post('/cart/{id}/coupon', [CartController::class, 'cartIdCoupon']);
Route::delete('/cart/{id}/coupon', [CartController::class, 'cartIdCouponDelete']);
*/

Route::post('/checkout', [CheckoutController::class, 'checkout']);

// NOTA: Esto es el ejercicio 4. OJO que el primero no sale en Yarc
Route::group(['prefix' => '/user'], function () {
    Route::post('/login', [UserController::class, 'userLogin']);
    Route::post('/register', [UserController::class, 'userRegister']);
    Route::put('/{id}', [UserController::class, 'userUpdate']);
    Route::delete('/{id}', [UserController::class, 'userDelete'])->middleware('check.permissions');
    Route::get('/{id}/favorite', [UserController::class, 'userFavorite']);
    Route::post('/{id}/favorite/{product}', [UserController::class, 'userFavoriteAdd']);
    Route::delete('/{id}/favorite/{product}', [UserController::class, 'userFavoriteDelete']);
    Route::get('/{id}/orders', [UserController::class, 'orders']);
    Route::post('/{id}/orders/{product}', [UserController::class, 'userOrdersAdd']); // Este lo he añadido después de la entrega a Javi
    Route::get('/{id}/comments', [UserController::class, 'comments']);
});

/* NOTA: Esto está comentado porque es el ejercicio 1 y 2 y lo del ejercicio 4 lo sustituye
Route::post('/user/login', [UserController::class, 'userLogin']);
Route::post('/user/register', [UserController::class, 'userRegister']);
Route::put('/user/{id}', [UserController::class, 'userUpdate']);
Route::delete('/user/{id}', [UserController::class, 'userDelete']);
Route::get('/user/{id}/favorite', [UserController::class, 'userFavorite']);
Route::post('/user/{id}/favorite/{product}', [UserController::class, 'userFavoriteAdd']);
Route::delete('/user/{id}/favorite/{product}', [UserController::class, 'userFavoriteDelete']);
Route::get('/user/{id}/orders', [UserController::class, 'orders']);
Route::get('/user/{id}/comments', [UserController::class, 'comments']);
*/

Route::post('/newsletter', [NewsletterController::class, 'newsletter']);
Route::delete('/newsletter', [NewsletterController::class, 'newsletterDelete']);

Route::get('/category/{id}', [CategoryController::class, 'category']);
Route::get('/category/{id}/products', [CategoryController::class, 'categoryProducts']);

Route::get('/model/{id}', [ModelController::class, 'model']);
Route::get('/model/{id}/comment', [ModelController::class, 'modelComment']);
Route::post('/model/{id}/comment', [ModelController::class, 'modelCommentAdd']);

Route::get('/menu', [MenuController::class, 'menu']);
Route::get('/menu/{id}', [MenuController::class, 'menuId']);
Route::post('/search', [SearchController::class, 'search']);

// Ejercicio de Emails con Ramón
// Route::get('/', function () {
//    Mail::to('pablopenalverescolano@gmail.com')
//        ->send(new \App\Mail\TestEmail());
// });

// Ejercicio 4.1.1
Route::resource('emails', EmailController::class);

// El require de abajo es el que viene por defecto en Laravel
require __DIR__.'/auth.php';
