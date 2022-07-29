<?php

namespace App\Http\Controllers\Frontsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontsiteController extends Controller
{
    //

    public function index()
    {
        return view('frontsite.index');
    }

    public function login()
    {
        return view('frontsite.login');
    }

    public function register()
    {
        return view('frontsite.register');
    }

    public function detailProduct()
    {
        return view('frontsite.product.detail-product');
    }

    public function cart()
    {
        return view('frontsite.cart');
    }

    public function pCategory()
    {
        return view('frontsite.category.product-per-category');
    }

}
