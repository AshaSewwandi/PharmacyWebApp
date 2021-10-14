<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
class ItemApiController extends Controller
{
    public function index()
    {
        $items= Item::all();
        return response()->json(['items'=>$items], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'Name'=>'required|max:191',
            'Brand'=>'required|max:191',
            'Price'=>'required|max:191',
            'Quantity'=>'required|max:191',
            'AdminID'=>'required|max:191',
        ]);

        $item=new Item;
        $item->Name=$request->Name;
        $item->Brand=$request->Brand;
        $item->Price=$request->Price;
        $item->Quantity=$request->Quantity;
        $item->AdminID=$request->AdminID;
        $item->save();

        return response()->json(['message'=>'Item Added Successfully'],200);

    }

    public function show($ItemID)
    {
        $items= Item::find($ItemID);
        if($items){
            return response()->json(['items'=>$items], 200);
        }else{
            return response()->json(['message'=>'No Item Found'], 404);
        }  
    }

    public function update(Request $request, $ItemID)
    {
        $request->validate([
            'Name'=>'required|max:191',
            'Brand'=>'required|max:191',
            'Price'=>'required|max:191',
            'Quantity'=>'required|max:191',
        ]);

        $item=Item::find($ItemID);
        if($item)
        {
            $item->Name=$request->Name;
            $item->Brand=$request->Brand;
            $item->Price=$request->Price;
            $item->Quantity=$request->Quantity;
    
            $item->update();
    
            return response()->json(['message'=>'Item Updated Successfully'],200); 
        }
        else{
            return response()->json(['message'=>'No Item Found'],404); 
        }
    }

    public function delete($ItemID)
    {
        $items = Item::find($ItemID);
        if($items)
        {
            $items->delete();
            return response()->json(['message'=>'Item Deleted Successfully'],200); 
        }
        else{
            return response()->json(['message'=>'No Item Found'],404);
        }
    }
}
