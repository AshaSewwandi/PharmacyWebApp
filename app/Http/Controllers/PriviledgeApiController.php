<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Priviledge;
class PriviledgeApiController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'RoleID'=>'required|max:191',
            'Description'=>'required|max:191'
        ]);

        $priviledge=new Priviledge;
        $priviledge->RoleID=$request->RoleID;
        $priviledge->Description=$request->Description;

        $priviledge->save();

        return response()->json(['message'=>'Priviledge Added Successfully'],200);
    }
}
