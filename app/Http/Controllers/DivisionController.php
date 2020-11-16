<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Division;
use App\District;

class DivisionController extends Controller
{


    public function manage_divisions(){
      $divisions=division::all();
      return view('admin.pages.division.index',compact('divisions'));
    }

    public function create(){

      return view('admin.pages.division.create');
    }

      public function store(Request $request){
        $request->validate([
          'name'=> 'required|max:100',
          'priority'=> 'required',

        ]);
        $division = new division;
        $division->name = $request->name;
        $division->priority = $request->priority;

        $division->save();
        return redirect()->back();
      }


      public function edit_division($id){
        $division=division::find($id);

        return view('admin.pages.division.edit',compact('division'));
      }

      public function update_division(Request $request,$id){
        $request->validate([
          'name'=> 'required|max:100',
          'priority'=> 'required',
        ]);
        $division = division::find($id);
        $division->name = $request->name;
        $division->priority = $request->priority;

        $division->save();
        return redirect()->back();
      }

      public function delete_division($id){

        $division=Division::find($id);

        $districts = District::where('division_id',$division->id)->get();
        foreach ($districts as $district) {
          $district->delete();
        }


        $division->delete();
        return redirect()->back();
      }



}
