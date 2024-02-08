<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

}

/*$cart = new Cart(['name' => 'Processors']);
$cart->save();
$cartLine = new CartLine(['name' => 'Intel i3']);
$cart->cartlines()->save($cartLine);
// También podemos guardar la relación desde el objeto relacionado
$cartLine->cart()->associate($cart);
$cartLine->save();
// O para guardar muchos objetos relacionados...
$cart->cartline()->saveMany([
    new CartLine(['name' => 'Intel i5']),
    new CartLine(['name' => 'Intel i7']),
]);*/
