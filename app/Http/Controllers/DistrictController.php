<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Division;
use App\District;

class DistrictController extends Controller
{



      public function manage_districts(){
        $districts=district::all();
        return view('admin.pages.district.index',compact('districts'));
      }

      public function create(){
        $divisions = Division::all();
        return view('admin.pages.district.create',compact('divisions'));
      }

        public function store(Request $request){
          $request->validate([
            'name'=> 'required|max:100',
            'division_id'=> 'required',

          ]);
          $district = new district;
          $district->name = $request->name;
          $district->division_id = $request->division_id;
          $district->save();
          return redirect()->back();
        }


        public function edit_district($id){
          $district=district::find($id);
          return view('admin.pages.district.edit',compact('district'));
        }

        public function update_district(Request $request,$id){
          $request->validate([
            'name'=> 'required|max:100',
            'division_id'=> 'required',
          ]);
          $district = district::find($id);
          $district->name = $request->name;
          $district->division_id = $request->division_id;
          $district->save();
          return redirect()->back();
        }

        public function delete_district($id){
          $district=district::find($id);
          $district->delete();
          return redirect()->back();
        }


}
