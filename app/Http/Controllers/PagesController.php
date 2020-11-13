<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Brand;

class PagesController extends Controller
{
    public function index(){
      $products = Product::all();
      return view('pages.index',compact('products'));
    }
    public function contact(){
      return view('pages.contact');
    }
    public function products(){
      $products = Product::inRandomOrder()->paginate(6);
      return view('pages.product.index',compact('products'));
    }
    public function brands(){
      $brands = Brand::all();
      return view('pages.brands',compact('brands'));
    }
    public function brand($id){
      $products = Product::where('brand_id',$id)->get();
      $brand = Brand::find($id);
      return view('pages.brand',compact('products','brand'));
    }
    public function productshow($id){
      $product = Product::where('id',$id)->first();
      return view('pages.product.show',compact('product'));
    }
    public function productcategory($id){
      $products = Product::where('category_id',$id)->get();
      $category = Category::find($id);
      return view('pages.category',compact('products','category'));
    }
    public function productsearch(Request $request){

      $products = Product::where('title','like','%'.$request->search.'%')
      ->orwhere('description','like','%'.$request->search.'%')

      ->paginate(5);

      return view('pages.product.search',compact('products'));
    }




}
