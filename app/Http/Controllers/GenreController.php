<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Genre;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Genre::where('user_id', Auth::user()->id)->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $count = Genre::where('name', '=', $request->input('genreName'))->where('user_id', Auth::user()->id)->count();
        if ($count == 0) {

            $genre = new Genre();
            $genre->id = $request->input('genreId');
            $genre->name = $request->input('genreName');
            $genre->user_id = Auth::user()->id;
                    
            if ($genre->save()) {
                return redirect()->back()->with('alert', $request->input('genreName') . ' Added Successfully!');
            }
        } else {
            return redirect()->back()->with('alert', $request->input('genreName') . ' Already Exists!');
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
        $genre = Genre::where('id',$id)->where('user_id', Auth::user()->id)->firstOrFail();
        
        $genreName = $genre->name;

        $genre->delete();
        
        return redirect()->back()->with('alert', $genreName . ' Deleted Successfully!');
    }
}
