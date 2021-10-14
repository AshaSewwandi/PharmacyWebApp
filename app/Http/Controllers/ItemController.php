<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function create(Request $request)
    {
        $item = Item::all();
        $user = User::find($request->input('id'));
        
        return view('Items.addItem', compact('item','user'));
    }

    public function store(Request $request)
    {
        $item=new Item;
        $item->ItemID=$request->ItemID;
        $item->Name=$request->Name;
        $item->Brand=$request->Brand;
        $item->Price=$request->Price;
        $item->Quantity=$request->Quantity;
        $item->AdminID=$request->AdminID;
        $item->save();

        return redirect('/viewitem')->with('success','Item Added successfully');
    }

    public function show()
    {
        $user = User::latest()->paginate();
        $items = Item::latest()->paginate();
    
        return view('Items.viewItem',compact('items','user'));
    }

    public function edit($ItemID)
    {
        $item = Item::find($ItemID) ;
        return view('Items.editItem')->with('items',$item);
    }

    public function update(Request $request)
    {
        $ItemID=$request->ItemID;
        $Name=$request->Name;
        $Brand=$request->Brand;
        $Price=$request->Price;
        $Quantity=$request->Quantity;

        $item=Item::find($ItemID);

        $item->Name=$Name;
        $item->Brand=$Brand;
        $item->Price=$Price;
        $item->Quantity=$Quantity;

        $item->save();

        $items = Item::all();

        return view('Items.viewItem')->with('items',$items);
    }

    public function destroy($ItemID)
    {
        $users =User::all();
        $items = Item::find($ItemID);
        $items->delete();

        return redirect()->back()->with('success','Item Deleted');
    }
}
