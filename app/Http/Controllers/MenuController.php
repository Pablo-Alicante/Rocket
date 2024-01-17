<?php

namespace App\Http\Controllers;

class MenuController extends Controller
{
    public function menu()
    {
        return 'menu';
    }

    public function menuId($id)
    {
        return 'menuId';
    }
}
