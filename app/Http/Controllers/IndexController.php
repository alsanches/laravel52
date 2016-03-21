<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nav;

use App\Http\Requests;

class IndexController extends Controller
{
    public function index()
    {
        $navs = Nav::all();

        return view('welcome', ['navs' => $navs]);
    }
}
