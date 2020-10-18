<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sbu_information;
use Illuminate\Support\Facades\Auth;
use App\Models\Office_location_information;

class OfficeLocationController extends Controller
{
   
    public function index()
    {
         $data['title']="List of Office Location";
         $data['locations']=Office_location_information::all();
         $locations = New Office_location_information();
         $locations = $locations->orderBy('id', 'DESC')->simplePaginate(5);
         $data['locations']=$locations;
         $data['serial']    = 1;
         return view('office_location.index',$data);
    }
    public function create()
    {
        $data['title']="Create Office Location";
        $data['sbu_infos']=Sbu_information::all();
        return view('office_location.create', $data);
    }

    public function store(Request $request)
    {

        $request->validate([
            'address'=>'required',
        ]);
        
            $office_location= new Office_location_information();
            $office_location->address = $request->address;
            $office_location->sbu_id = $request->sbu_id;

            $office_location->created_by = Auth::User()->name;
            $office_location->save();
            return redirect()->route('officelocation.index');

    }
    public function edit($id)
    {
        $data['title']="Edit Office Location";
        $data['sbu_infos']=Sbu_information::all();

        $data['data']=Office_location_information::find($id);
        return view('office_location.edit',$data);

    }
     
    public function update(Request $request,$id)
    {
        $office_location=  Office_location_information::find($id);
        $office_location->address = $request->address;
        $office_location->sbu_id = $request->sbu_id;

        $office_location->modified_by = Auth::User()->name;
        $office_location->save();
        return redirect()->route('officelocation.index');

    }
}
