<?php

namespace App\Http\Controllers;

class ModelController extends Controller
{
    public function model($id)
    {
        return 'model';
    }

    public function modelComment($id)
    {
        return 'modelComment';
    }

    public function modelCommentAdd($id)
    {
        return 'modelCommentAdd';
    }
}
