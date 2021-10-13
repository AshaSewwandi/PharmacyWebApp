<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Customer;
use App\Models\User;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        return view('Customers.viewCustomer');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $customer = Customer::all();
        $user = User::find($request->input('id'));
        
        return view('Customers.addCustomer', compact('customer','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        // $request->validate([
        //     'Name' => 'required',
        //     'Email' => 'required',
        //     'Address' => 'required',
        //     'Contact' => 'required',
        //     'NIC' => 'required',

        // ]);

        $customer=new Customer;
        $customer->CustomerID=$request->CustomerID;
        $customer->Name=$request->Name;
        $customer->NIC=$request->NIC;
        $customer->Address=$request->Address;
        $customer->Email=$request->Email;
        $customer->MobileNo=$request->MobileNo;
        $customer->AdminID=$request->AdminID;
        $customer->save();
    
        return view('Customers.viewCustomer')->with('customers',$customer);
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
       $customers = Customer::latest()->paginate();
    
       return view('Customers.viewCustomer',compact('customers','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($CustomerID)
    {
        $customer = Customer::find($CustomerID) ;
        return view('Customers.editCustomer')->with('customers',$customer);

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
        $CustomerID=$request->CustomerID;
        $Name=$request->Name;
        $Address=$request->Address;
        $Email=$request->Email;
        $NIC=$request->NIC;
        $MobileNo=$request->MobileNo;

        $customer=Customer::find($CustomerID);

        $customer->Name=$Name;
        $customer->Address=$Address;
        $customer->Email=$Email;
        $customer->MobileNo=$MobileNo;
        $customer->NIC=$NIC;

        $customer->save();

        $customers = Customer::all();

        return view('Customers.viewCustomer')->with('customers',$customers);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($CustomerID)
    {
        $users =User::all();
        $customers = Customer::find($CustomerID) ;
        $customers->delete();

        return redirect()->back();

        //return view('Customers.viewCustomer',compact('customers','users'));
    }
}
