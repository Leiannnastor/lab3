<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ProductsController extends BaseController
{
    private $products;
    public function __construct()
    {
        $this->products = new \App\Models\ProductsModel;
    }
    public function index()
    {
        $data = [
            'products' => $this->products->findAll(),
            'url' => '/',
        ];
        return view('userSide/index', $data);
    }
    public function singleprod($id)
    {
        $data = [
            'url' => 'Details',
            'products' => $this->products->where('id', $id)->first(),
        ];
        return view('userSide/product-page', $data);

    }
    public function shops()
    {

        $data = [
            'url' => 'shops',
            'products' => $this->products->findAll(),
        ];
        return view('userSide/shop', $data);
    }
    public function contact()
    {

        $data = [
            'url' => 'contact',
        ];
        return view('userSide/contact', $data);
    }
}
