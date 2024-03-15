<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CartLineController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ModelController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderLineController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('home');
})->name('home');*/

Route::get('/', [InicioController::class, 'index'])->name('home');

// Lineas de carito // HECHO Y REPASADO
Route::get('/cartlines', [CartLineController::class, 'cartlines'])->name('cartlines');

//Carritos  // HECHO Y REPASADO
// NOTA: Esto es el ejercicio 4.
// Route::group(['prefix' => '/cart'], function () {
Route::get('/carts', [CartController::class, 'carts'])->name('carts'); //Obtengo todos los carritos
Route::get('cart/{id}', [CartController::class, 'cartId']); //Obtengo un carrito por id
Route::get('cart/{id}/product', [CartController::class, 'cartIdProduct']);
Route::post('cart/{id}/product/{id_product}', [CartController::class, 'cartIdProductAdd']); //Añado un producto a un carrito
Route::delete('cart/{id}/line/{id_line}', [CartController::class, 'cartIdProductDelete']); //Borro un producto de un carrito
Route::get('cart/{id}/coupon/{id_coupon}', [CartController::class, 'cartIdCoupon']); //Añado un cupón a un carrito
Route::get('cart/{id}/coupon', [CartController::class, 'cartIdCouponDelete']); //Borro un cupón de un carrito
//});

/* NOTA: Esto está comentado porque es el ejercicio 1 y 2 y lo del ejercicio 4 lo sustituye
Route::post('/cart', [CartController::class, 'cart']);
Route::get('/cart/{id}', [CartController::class, 'cartId']);
Route::post('/cart/{id}/product', [CartController::class, 'cartIdProduct']);
Route::put('/cart/{id}/product', [CartController::class, 'cartIdProductAdd']);
Route::delete('/cart/{id}/line/{id_line}', [CartController::class, 'cartIdProductDelete']);
Route::post('/cart/{id}/coupon', [CartController::class, 'cartIdCoupon']);
Route::delete('/cart/{id}/coupon', [CartController::class, 'cartIdCouponDelete']);
*/

//Categorías // HECHO Y REPASADO
Route::get('/categories', [CategoryController::class, 'categories'])->name('categories');
Route::get('/category/{id}', [CategoryController::class, 'category']);
Route::post('/category/CategoryAdd', [CategoryController::class, 'categoryAdd']);
Route::delete('/category/{id}/CategoryDelete', [CategoryController::class, 'categoryDelete'])->name('categoryDelete');
Route::post('/category/{id}/CategoryUpdate', [CategoryController::class, 'categoryUpdate']);

//Coupon  // HECHO Y REPASADO
Route::get('/coupons', [CouponController::class, 'coupons'])->name('coupons');
Route::get('/coupon/{id}', [CouponController::class, 'coupon']);
Route::post('/coupon/CouponAdd', [CouponController::class, 'couponAdd']);
Route::delete('/coupon/{id}/CouponDelete', [CouponController::class, 'CouponDelete'])->name('couponDelete');
Route::post('/coupon/{id}/CouponUpdate', [CouponController::class, 'CouponUpdate']);

//Checkout
Route::post('/checkout', [CheckoutController::class, 'checkout']);

//Comentarios de los productos // HECHO Y REPASADO
Route::post('/comment/product/{id}', [CommentController::class, 'productCommentAdd']);
Route::delete('/comment/{id}/commentDelete', [CommentController::class, 'productCommentDelete'])->name('productCommentDelete');
Route::post('/comment/{id}/commentUpdate', [CommentController::class, 'productCommentUpdate']);
Route::get('comment/{id}/validate/{status}', [CommentController::class, 'validateComment']);

// Imágenes de los productos // HECHO Y REPASADO
Route::post('/images/product/{id}', [ImageController::class, 'productImageAdd']);
Route::delete('/image/{id}/imageDelete', [ImageController::class, 'productImageDelete'])->name('productImageDelete');
Route::post('/image/{id}/imageUpdate', [ImageController::class, 'productImageUpdate']);

//Modelos // HECHO Y REPASADO
Route::get('/models', [ModelController::class, 'models'])->name('models');
Route::get('/model/{id}', [ModelController::class, 'model']);
Route::post('/model/modelAdd', [ModelController::class, 'modelAdd']);
Route::delete('/model/{id}/modelDelete', [ModelController::class, 'modelDelete'])->name('modelDelete');
Route::post('/model/{id}/modelUpdate', [ModelController::class, 'modelUpdate']);

//Newsletter // HECHO Y REPASADO
Route::get('/newsletters', [NewsletterController::class, 'newsletters'])->name('newsletters');
Route::get('/newsletter/{id}', [NewsletterController::class, 'newsletter']);
Route::post('/newsletterAdd', [NewsletterController::class, 'newsletterAdd']);
Route::delete('/newsletter/{id}/NewsletterDelete', [NewsletterController::class, 'newsletterDelete'])->name('newsletterDelete');
Route::post('/newsletter/{id}/NewsletterUpdate', [NewsletterController::class, 'newsletterUpdate']);

//Orders // HECHO Y REPASADO
Route::get('/orders', [OrderController::class, 'orders'])->name('orders');
Route::get('/order/{id}', [OrderController::class, 'orderId']);
Route::post('/orderAdd', [OrderController::class, 'orderAdd']);
Route::delete('/order/{id}/orderDelete', [OrderController::class, 'orderDelete'])->name('orderDelete');
Route::post('/order/{id}/orderUpdate', [OrderController::class, 'orderUpdate']);
Route::get('/order/{id}/changeStatus/{status}', [OrderController::class, 'changeStatus']);

//OrdersLines // HECHO Y REPASADO
Route::get('/orderlines', [OrderLineController::class, 'orderlines'])->name('orderlines');
Route::get('/orderline/{id}', [OrderLineController::class, 'orderlineId']);
Route::post('/orderlineAdd', [OrderLineController::class, 'orderlineAdd']);
Route::delete('/orderline/{id}/orderlineDelete', [OrderLineController::class, 'orderlineDelete'])->name('orderlineDelete');
Route::post('/orderline/{id}/orderlineUpdate', [OrderLineController::class, 'orderlineUpdate']);

//Productos // HECHO Y REPASADO
Route::get('/products', [ProductController::class, 'products'])->name('products');
Route::get('/product/{id}', [ProductController::class, 'product']);
Route::post('/product/productAdd', [ProductController::class, 'productAdd']);
Route::delete('/product/{id}/productDelete', [ProductController::class, 'productDelete'])->name('productDelete');
Route::post('/product/{id}/productUpdate', [ProductController::class, 'productUpdate']);

//Usuarios // HECHO Y REPASADO
// NOTA: Esto es el ejercicio 4. OJO que el primero no sale en Yarc
//Route::group(['prefix' => '/user'], function () {
Route::get('/users', [UserController::class, 'users'])->name('users');
Route::get('/user/{id}', [UserController::class, 'user'])->name('user');
Route::post('/user/register', [UserController::class, 'userRegister'])->name('usersRegister');
Route::post('/user/{id}/Update', [UserController::class, 'userUpdate']);
Route::delete('/user/{id}/Delete', [UserController::class, 'userDelete'])->name('userDelete');
Route::post('/user/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::get('user/{id}/favorites', [FavoriteController::class, 'userFavorite'])->name('userFavorite');
Route::post('/user/favorite', [FavoriteController::class, 'userFavoriteAdd']);
Route::delete('user/favorite/{id}', [FavoriteController::class, 'userFavoriteDelete']);
Route::get('user/{id}/orders', [UserController::class, 'orders'])->name('userOrders');
Route::get('user/{id}/comments/{id}', [UserController::class, 'userComments']);
Route::post('user/{id}/orders', [UserController::class, 'userOrdersAdd']);

//Search // HECHO Y REPASADO
Route::post('/searchProduct', [SearchController::class, 'searchProduct'])->name('search');
Route::post('/searchUser', [SearchController::class, 'searchUser'])->name('search');
Route::post('/searchOrder', [SearchController::class, 'searchOrder'])->name('search');


//});

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

Route::get('/emails', [EmailController::class, 'emails'])->name('emails');


// Ejercicio de Emails con Ramón
// Route::get('/', function () {
//    Mail::to('pablopenalverescolano@gmail.com')
//        ->send(new \App\Mail\TestEmail());
// });

// Ejercicio 4.1.1
// Route::resource('emails', EmailController::class);

// El require de abajo es el que viene por defecto en Laravel
require __DIR__.'/auth.php';
