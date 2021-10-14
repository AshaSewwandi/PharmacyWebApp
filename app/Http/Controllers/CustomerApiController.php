<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
class CustomerApiController extends Controller
{

    public function show($CustomerID)
    { 
        $customers= Customer::find($CustomerID);
        if($customers){
            return response()->json(['customers'=>$customers], 200);
        }else{
            return response()->json(['message'=>'No Customer Found'], 404);
        }    
    }

    public function index()
    { 
        $customers= Customer::all();
        return response()->json(['costomers'=>$customers], 200);   
    }

    public function store(Request $request)
    {
        $request->validate([
            'Name'=>'required|max:191',
            'NIC'=>'required|max:191',
            'Address'=>'required|max:191',
            'Email'=>'required|max:191',
            'MobileNo'=>'required|max:191',
            'AdminID'=>'required|max:191',
        ]);
        
        $customers=new Customer;
        $customers->CustomerID=$request->CustomerID;
        $customers->Name=$request->Name;
        $customers->NIC=$request->NIC;
        $customers->Address=$request->Address;
        $customers->Email=$request->Email;
        $customers->MobileNo=$request->MobileNo;
        $customers->AdminID=$request->AdminID;
        $customers->save();

        return response()->json(['message'=>'Customer Added Successfully'],200);   
    }

    public function update(Request $request, $CustomerID)
    {
        $request->validate([
            'Name'=>'required|max:191',
            'NIC'=>'required|max:191',
            'Address'=>'required|max:191',
            'Email'=>'required|max:191',
            'MobileNo'=>'required|max:191',
        ]);

        $customer=Customer::find($CustomerID);
        if($customer)
        {
            $customer->Name=$request->Name;
            $customer->Address=$request->Address;
            $customer->Email=$request->Email;
            $customer->MobileNo=$request->MobileNo;
            $customer->NIC=$request->NIC;
    
            $customer->update();
    
            return response()->json(['message'=>'Customer Updated Successfully'],200); 
        }
        else{
            return response()->json(['message'=>'No Customer Found'],404); 
        }
       
    }
    
    public function delete($CustomerID)
    {
        $customers = Customer::find($CustomerID);
        if($customers)
        {
            $customers->delete();
            return response()->json(['message'=>'Customer Deleted Successfully'],200); 
        }
        else{
            return response()->json(['message'=>'No Customer Found'],404);
        }
    }
}
