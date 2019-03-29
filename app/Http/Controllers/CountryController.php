<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Country;
use App\User;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Country::where('user_id', Auth::user()->id)->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $count = Country::where('code', '=', $request->input('countryCode'))->where('user_id', Auth::user()->id)->count();

        if($count == 0) {
            $country = new Country();
            $country->code = $request->input('countryCode');
            $country->name = $request->input('countryName');
            $country->user_id = Auth::user()->id;

            if($country->save()) {
                return redirect()->back()->with('alert', $request->input('countryName') . ' Added Successfully!');
            };
        } else {
            return redirect()->back()->with('alert', $request->input('countryName') . ' Already Exists!');
        }

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
        $country = Country::where('code',$id)->where('user_id', Auth::user()->id)->firstOrFail();
        
        $countryName = $country->name;

        $country->delete();
        
        return redirect()->back()->with('alert', $countryName . ' Deleted Successfully!');
    }
}
