<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Products extends Controller
{
    public function categoryList(){
        return view('pages.products.categoryList');
    }
    public function addCategory(){
        return view('pages.products.addCategory');
    }
    public function subCatList(){
        return view('pages.products.subCatList');
    }
    public function addSubCatList(){
        return view('pages.products.addSubCatList');
    }
    public function brandList(){
        return view('pages.products.brandList');
    }
    public function addBrand(){
        return view('pages.products.addBrand');
    }
    public function productList(){
        return view('pages.products.productList');
    }
    public function addProduct(){
        return view('pages.products.addProduct');
    }
}
