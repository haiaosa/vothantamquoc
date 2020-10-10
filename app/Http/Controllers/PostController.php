<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends BaseController
{
    public function index()
    {
        return $this->show() . '<br>' . 'from Post';
    }
}
