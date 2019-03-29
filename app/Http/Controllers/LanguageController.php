<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Language;
use App\User;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Language::where('user_id', Auth::user()->id)->get();
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
        $count = Language::where('code', '=', $request->input('languageCode'))->where('user_id', Auth::user()->id)->count();
        if($count == 0) {            
            $language = new Language();
            $language->code = $request->input('languageCode');
            $language->name = $request->input('languageName');
            $language->user_id = Auth::user()->id;            
                    
            if ($language->save()) {                
                return redirect()->back()->with('alert', $request->input('languageName') . ' Added Successfully!');
            }
        } else {
            return redirect()->back() ->with('alert', $request->input('languageName') . ' Already Exists!');   
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
        $language = Language::where('code',$id)->where('user_id', Auth::user()->id)->firstOrFail();
        
        $languageName = $language->name;

        $language->delete();
        
        return redirect()->back()->with('alert', $languageName . ' Deleted Successfully!');
    }
}
