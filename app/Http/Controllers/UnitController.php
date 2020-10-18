<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UnitController extends Controller
{
    
    public function index()
    {
         $data['title']="List of  Units";
         $units = New Unit();
         $units = $units->orderBy('id', 'DESC')->simplePaginate(5);
         $data['units']=$units;
         $data['serial']    = 1;
         return view('unit.index',$data);
    }
    public function create()
    {
        $data['title']="Create Unit";
        return view('unit.create', $data);
    }

    public function store(Request $request)
    {

        $request->validate([
            'unit_name'=>'required|unique:units',
        ]);
        
            $unit= new Unit();
            $unit->unit_name = $request->unit_name;
            $unit->created_by = Auth::User()->name;
            $unit->save();
            return redirect()->route('unit.index');

    }
    public function edit($id)
    {
        $data['title']="Edit Unit";
        $data['data']=Unit::find($id);
        return view('unit.edit',$data);

    }
     
    public function update(Request $request,$id)
    {
        $request->validate([
            'unit_name'=>'required|unique:units,unit_name,'.$id,
        ]);
        $unit= Unit::find($id);
        $unit->unit_name = $request->unit_name;
        $unit->modified_by = Auth::User()->name;
        $unit->save();
        return redirect()->route('unit.index');

    }
}
