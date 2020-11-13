<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{

  public function manage_categories(){
    $categories=Category::all();
    return view('admin.pages.category.index',compact('categories'));
  }
  public function create(){
    $pcategories=Category::where('parent_id',NULL)->get();
    return view('admin.pages.category.create',compact('pcategories'));
  }

    public function store(Request $request){
      $request->validate([
        'name'=> 'required|max:100',
        'description'=> 'required',

      ]);
      $category = new Category;
      $category->name = $request->name;
      $category->description = $request->description;
      $category->parent_id = $request->parent_id;

      if ($request->image) {
        $image = $request->image;
          $uimgname = time().'.'.$image->getClientOriginalExtension();
          $destinationPath = public_path('/images/categoryimg');
          $image->move($destinationPath, $uimgname);
          $category->image = $uimgname;
      }
      $category->save();
      return redirect()->back();
    }


    public function edit_category($id){
      $category=Category::find($id);
      $pcategories=Category::where('parent_id',NULL)->get();
      return view('admin.pages.category.edit',compact(['category','pcategories']));
    }

    public function update_category(Request $request,$id){
      $request->validate([
        'name'=> 'required|max:100',
        'description'=> 'required',
      ]);
      $category = Category::find($id);
      $category->name = $request->name;
      $category->description = $request->description;
      $category->parent_id = $request->parent_id;

      if ($request->image) {
        if (File::exists("images/categoryimg/".$category->image)) {
          File::delete("images/categoryimg/".$category->image);
        }
        $image = $request->image;
          $uimgname = time().'.'.$image->getClientOriginalExtension();
          $destinationPath = public_path('/images/categoryimg');
          $image->move($destinationPath, $uimgname);
          $category->image = $uimgname;
      }
      $category->save();
      return redirect()->back();
    }

    public function delete_category($id){

      $category=category::find($id);

      if ($category->parent_id !== NULL) {
        if (File::exists("images/categoryimg/".$category->image)) {
          File::delete("images/categoryimg/".$category->image);
        }
        $category->delete();
      }else {

        $subcats = Category::where('parent_id',$category->id)->get();
        foreach ($subcats as $subcat) {
          if (File::exists("images/categoryimg/".$subcat->image)) {
            File::delete("images/categoryimg/".$subcat->image);
          }
          $subcat->delete();
        }

        if (File::exists("images/categoryimg/".$category->image)) {
          File::delete("images/categoryimg/".$category->image);
        }
        $category->delete();
      }
      return redirect()->back();
    }





}
