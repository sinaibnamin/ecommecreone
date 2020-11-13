<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use Illuminate\Support\Facades\File;

class BrandController extends Controller
{

  public function manage_brands(){
    $brands=Brand::all();
    return view('admin.pages.brand.index',compact('brands'));
  }

  public function create(){

    return view('admin.pages.brand.create');
  }

    public function store(Request $request){
      $request->validate([
        'name'=> 'required|max:100',
        'description'=> 'required',

      ]);
      $brand = new Brand;
      $brand->name = $request->name;
      $brand->description = $request->description;


      if ($request->image) {
        $image = $request->image;
          $uimgname = time().'.'.$image->getClientOriginalExtension();
          $destinationPath = public_path('/images/brandimg');
          $image->move($destinationPath, $uimgname);
          $brand->image = $uimgname;
      }
      $brand->save();
      return redirect()->back();
    }


    public function edit_brand($id){
      $brand=Brand::find($id);

      return view('admin.pages.brand.edit',compact('brand'));
    }

    public function update_brand(Request $request,$id){
      $request->validate([
        'name'=> 'required|max:100',
        'description'=> 'required',
      ]);
      $brand = Brand::find($id);
      $brand->name = $request->name;
      $brand->description = $request->description;


      if ($request->image) {
        if (File::exists("images/brandimg/".$brand->image)) {
          File::delete("images/brandimg/".$brand->image);
        }
        $image = $request->image;
          $uimgname = time().'.'.$image->getClientOriginalExtension();
          $destinationPath = public_path('/images/brandimg');
          $image->move($destinationPath, $uimgname);
          $brand->image = $uimgname;
      }
      $brand->save();
      return redirect()->back();
    }

    public function delete_brand($id){

      $brand=Brand::find($id);


        if (File::exists("images/brandimg/".$brand->image)) {
          File::delete("images/brandimg/".$brand->image);
        }
        $brand->delete();



      return redirect()->back();
    }





}
