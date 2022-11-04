<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Customer;
use App\Property;
use Auth;
use Illuminate\Support\Facades\DB;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\leads;
use App\Location;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comp=Auth::user()->companyid;
        $compn=Auth::user()->company;        
        $name=Auth::user()->name;
        $role=Auth::user()->role->name;
        $facebook=Auth::user()->facebook;
        $twitter=Auth::user()->twitter;
        $insta=Auth::user()->insta;
        $linkedin=Auth::user()->linkedin;
        $customers = Customer::Where(function ($query) use($compn) {
            $query->where('company', '=', $compn);
        })->get();
        return view('customer.index', compact('customers', 'compn', 'comp','name', 'role', 'facebook', 'twitter', 'insta', 'linkedin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $comp=Auth::user()->companyid;
        $compn=Auth::user()->company;             
        $name=Auth::user()->name;
        $role=Auth::user()->role->name;
        $facebook=Auth::user()->facebook;
        $twitter=Auth::user()->twitter;
        $insta=Auth::user()->insta;
        $linkedin=Auth::user()->linkedin;
        return view('customer.create', compact('comp', 'compn','name', 'role', 'facebook', 'twitter', 'insta', 'linkedin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $comp = Auth::user()->company;
        $this->validate($request, array(
            
            'email' => 'unique:customers,email',
            'phone' => 'unique:customers,phone',
        ));
    
            $custId = $request->cust_id;
            Customer::updateOrCreate(['id' => $custId], ['name' => $request->name, 'email' => $request->email, 'phone' => $request->phone,'nature'=>$request->nature, 'gst' => $request->gst, 'company' => $comp, 'clientcompany' => $request->clientcompany]);
            if(empty($request->cust_id))
                $msg = 'Customer entry created successfully.';
            else
                $msg = 'Customer data is updated successfully';
            return redirect()->route('leads.create')->with('success',$msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
