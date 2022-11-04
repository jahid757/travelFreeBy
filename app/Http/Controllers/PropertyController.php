<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Property;
use Auth;
use Illuminate\Support\Facades\DB;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\leads;
use App\Location;

class PropertyController extends Controller
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
        $properties = Property::Where(function ($query) use($compn) {
            $query->where('company', '=', $compn);
        })->get();
        return view('property.index', compact('comp', 'compn', 'name', 'role', 'facebook', 'twitter', 'insta', 'linkedin', 'properties'));

    }

    public function indexlist()
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
        $properties = Property::Where(function ($query) use($compn) {
            $query->where('company', '=', $compn);
        })->paginate(2);
        
        return view('property.indexlist', compact('comp', 'compn', 'name', 'role', 'facebook', 'twitter', 'insta', 'linkedin', 'properties'));

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
        $comp = Auth::user()->company;
        $name=Auth::user()->name;
        $role=Auth::user()->role->name;
        $facebook=Auth::user()->facebook;
        $twitter=Auth::user()->twitter;
        $insta=Auth::user()->insta;
        $linkedin=Auth::user()->linkedin;
        $cityn = Location::all();
        foreach ($cityn as $cityn) 
                {
                    $cityf[] = $cityn->city;
                
                }
                $cityff = json_encode($cityf);
        $local = Location::all();        
        foreach ($local as $local) 
                {
                    $localf[] = $local->locality;
                
                }
                $localff = json_encode($localf);
        return view('property.create', compact('comp', 'compn', 'name', 'role', 'facebook', 'twitter', 'insta', 'linkedin', 'localff', 'cityff'));
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
        $input = $request->all();
        $imagenames = $request->images;
        $names = [];
        $expectedprice = $request->expectedPrice;
        if($expectedprice<100000){
            $prange = "  ";
        }
        elseif($expectedprice>99999 && $expectedprice<9999999){
            $prange = "Lacs";
            $showprice = ($expectedprice/100000);
        }
        else{
            $prange = "CR";
            $showprice = ($expectedprice/10000000);
        }

        if($request->hasFile('images')) {

                foreach($imagenames as $image)
            {   
                $destinationPath = 'property_images/';
                $filename = time() . "." .$image->getClientOriginalName();
                $image->move($destinationPath, $filename);
                array_push($names, $filename);          

            }
        }
        $input['images'] = json_encode($names);
        $input['expectedPrice'] = $showprice;
        $input['prange'] = $prange;
        Property::create($input);
        return redirect('/properties');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $comp = Auth::user()->company;
        $name=Auth::user()->name;
        $role=Auth::user()->role->name;
        $facebook=Auth::user()->facebook;
        $twitter=Auth::user()->twitter;
        $insta=Auth::user()->insta;
        $linkedin=Auth::user()->linkedin;
        $cityn = Location::all();
        $property = Property::findOrFail($id);

        foreach ($cityn as $cityn) 
                {
                    $cityf[] = $cityn->city;
                
                }
                $cityff = json_encode($cityf);
        $local = Location::all();        
        foreach ($local as $local) 
                {
                    $localf[] = $local->locality;
                
                }
                $localff = json_encode($localf);
        return view('property.edit', compact('comp', 'name', 'role', 'facebook', 'twitter', 'insta', 'linkedin', 'localff', 'cityff', 'property'));


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

        $property = Property::findOrFail($id);
        $input = $request->all();
        $property->update($input);
        
        return redirect('/properties');

    }

    public function show($id)
    {
        //
        $comp=Auth::User()->company;
        $name=Auth::User()->name;
        $role=Auth::User()->role->name;
        $facebook=Auth::user()->facebook;
        $twitter=Auth::user()->twitter;
        $insta=Auth::user()->insta;
        $linkedin=Auth::user()->linkedin;

        $property = Property::findOrFail($id);
        
        return view('property.details', compact('property', 'comp', 'name', 'role', 'facebook', 'twitter', 'insta', 'linkedin'));
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
