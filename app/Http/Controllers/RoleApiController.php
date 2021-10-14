<?php

namespace App\Http\Controllers;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleApiController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'name'=>'required|max:191'
        ]);

        $roles=new Role;
        $roles->name=$request->name;

        $roles->save();

        return response()->json(['message'=>'Role Added Successfully'],200);
    }
}
