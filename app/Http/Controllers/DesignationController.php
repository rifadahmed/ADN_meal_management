<?php

namespace App\Http\Controllers;

use App\Models\Designation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DesignationController extends Controller
{
    
    public function index()
    {
         $data['title']="List of Designations";
         $data['designations']=Designation::all();
         $designations = New Designation();
         $designations = $designations->orderBy('id', 'DESC')->simplePaginate(5);
         $data['designations']=$designations;
         $data['serial']    = 1;
         return view('designation.index',$data);
        // return "hello";
    }

    public function create()
    {
        $data['title']="Add New Designation";
        return view('designation.create', $data);
    }
    public function store(Request $request)
    {
        $request->validate([
        'designation_name'=>'required|unique:designations',
        ]);
        $designation= new Designation();
        $designation->designation_name = $request->designation_name;
        $designation->created_by = Auth::User()->name;
        $designation->save();
        return redirect()->route('designation.index');
    }

    public function edit($id)
    {
        $data['title']="Edit Designation";
        $data['data']=Designation::find($id);
        return view('designation.edit',$data);

    }

    public function update(Request $request,$id)
    {
        $designation= Designation::find($id);
        $designation->designation_name = $request->designation_name;
        $designation->modified_by = Auth::User()->name;
        $designation->save();
        return redirect()->route('designation.index');

    }
}
