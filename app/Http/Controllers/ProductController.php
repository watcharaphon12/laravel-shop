<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
  public function getProduct(){
    $data=Product::all();
    return $data;
  }
    public function index(){
      $data=$this->getProduct();
        return view('index')->with('data',$data);
    }
    public function details($id){
    $data = Product::where('id',$id)->get();
    foreach ($data as $product) {
      $product->details;
    }
    return view('iframe.product-details');
    }
}
