<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function babyKid()
    {
        return view('baby-kid');
    }

    public function beautyHealth()
    {
        return view('beauty-health');
    }

    public function foodBeverage()
    {
        return view('food-beverage');
    }

    public function homeCare()
    {
        return view('home-care');
    }

    public function home()
    {
        return view('home');
    }
    public function penjualan()
    {
        return view('penjualan');
    }

    public function user($id, $name)
    {
        return view('user')->with('id', $id)
        ->with('name', $name);
    }
}
