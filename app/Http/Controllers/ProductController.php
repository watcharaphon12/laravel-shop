<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

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
    public function getBanner(Request $request){
 
      $url = [];
      $i=0;
      $data=['images/banner-01.jpg','images/banner-02.jpg','images/banner-03.jpg','images/banner-04.jpg','images/banner-05.jpg'];
      foreach($data as $path){
        $url[$i] = asset(Storage::url($path));
        $i++;
      }
      return response()->json(['data' => $url]);
      ;
    }
}
