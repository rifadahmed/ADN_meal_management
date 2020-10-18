<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sbu_information;
use Illuminate\Support\Facades\Auth;

class SbuController extends Controller
{
    public function index()
    {
         $data['title']="List of Strategic business unit";
         $data['sub_informations']=Sbu_information::all();
         $sub_informations = New Sbu_information();
         $sub_informations = $sub_informations->orderBy('id', 'DESC')->simplePaginate(5);
         $data['sub_informations']=$sub_informations;
         $data['serial']    = 1;
         return view('sbu_information.index',$data);
    }
    public function create()
    {
        $data['title']="Create SBU";
        return view('sbu_information.create', $data);
    }

    public function store(Request $request)
    {

        $request->validate([
            'company_name'=>'required|unique:sbu_informations',
        ]);
        
            $sbu= new Sbu_information();
            $sbu->company_name = $request->company_name;
            $sbu->created_by = Auth::User()->name;
            $sbu->save();
            return redirect()->route('sbu.index');

    }
    public function edit($id)
    {
        $data['title']="Edit Strategic business unit";
        $data['data']=Sbu_information::find($id);
        return view('sbu_information.edit',$data);

    }
     
    public function update(Request $request,$id)
    {
        $sbu= Sbu_information::find($id);
        $sbu->company_name = $request->company_name;
        $sbu->modified_by = Auth::User()->name;
        $sbu->save();
        return redirect()->route('sbu.index');

    }
}
