<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $item = Item::all();
        $user = User::find($request->input('id'));
        
        return view('Items.addItem', compact('item','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        return redirect('/viewitem');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user = User::latest()->paginate();
        $items = Item::latest()->paginate();
    
        return view('Items.viewItem',compact('items','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($ItemID)
    {
        $item = Item::find($ItemID) ;
        return view('Items.editItem')->with('items',$item);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //dd($request->all());
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($ItemID)
    {
        $users =User::all();
        $items = Item::find($ItemID);
        $items->delete();

        return redirect()->back();
    }
}
