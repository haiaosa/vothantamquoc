<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntroController extends BaseController
{
    public function index()
    {
        return $this->show() . '<br>' . 'from Intro';
    }
}
