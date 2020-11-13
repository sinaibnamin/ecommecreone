<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Brand;
use App\Category;
use App\ProductImage;
use Image;

class AdminPagesController extends Controller
{
  public function index(){

    return view('admin.pages.index');
  }
  public function create(){
    $categories = Category::all();

    $brands = Brand::all();
    return view('admin.pages.product.create',compact('categories','brands'));
  }
  public function manage_products(){
    $products=Product::all();
    return view('admin.pages.product.index',compact('products'));
  }
  public function edit_product($id){
    $product=Product::find($id);
    $categories = Category::all();
      $brands = Brand::all();
    return view('admin.pages.product.edit',compact('product','categories','brands'));
  }
  public function delete_product($id){
    $product=Product::find($id);
    $product->delete();
      return redirect()->back();
  }



  public function store(Request $request){

    $request->validate([
      'title'=> 'required|max:100',
      'description'=> 'required',
      'price'=> 'required|numeric',
      'quantity'=> 'required|numeric',
    ]);
    $product = new Product;
    $product->title = $request->title;
    $product->description = $request->description;
    $product->price = $request->price;
    $product->quantity = $request->quantity;
    $product->slug = 'poo';
    $product->category_id = $request->category_id;
    $product->brand_id = $request->brand_id;
    $product->admin_id = 1;
    $product->save();
    if (count($request->product_image) > 0 ) {
      $j =1;
      foreach ($request->product_image as $image) {
        $uimgname = time().$j.'.'.$image->getClientOriginalExtension();
        $j++;
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $uimgname);
        $product_image = new ProductImage;
        $product_image->product_id= $product->id;
        $product_image->image = $uimgname;
        $product_image->save();
      }
    }
    return redirect()->back();
  }


  public function update_product(Request $request,$id){
    $request->validate([
      'title'=> 'required|max:100',
      'description'=> 'required',
      'price'=> 'required|numeric',
      'quantity'=> 'required|numeric',
    ]);


    $product =  Product::find($id);
    $product->title = $request->title;
    $product->description = $request->description;
    $product->price = $request->price;
    $product->quantity = $request->quantity;
    $product->slug = 'poo';
    $product->category_id = $request->category_id;
    $product->brand_id = $request->brand_id;

    $product->admin_id = 1;
    $product->save();


    // if (count($request->product_image) > 0 ) {
    //   $j =1;
    //   foreach ($request->product_image as $image) {
    //     $uimgname = time().$j.'.'.$image->getClientOriginalExtension();
    //     $j++;
    //     $destinationPath = public_path('/images');
    //     $image->move($destinationPath, $uimgname);
    //     $product_image = new ProductImage;
    //     $product_image->product_id= $product->id;
    //     $product_image->image = $uimgname;
    //     $product_image->save();
    //   }
    // }
    return redirect()->back();
  }




















}
