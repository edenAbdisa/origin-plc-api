<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Djiclearing;
class DjiclearingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Djiclearing::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    
        $input = $request->all();    
        $djiclearing=Djiclearing::create($input);
       return $djiclearing->save()? $djiclearing : "Couldnt save Djiclearing" ;
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Djiclearing  $djiclearing
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Djiclearing::find($id);
    }

    public function update(Request $request,  $id)
    {
        $djiclearing = Djiclearing::findOrFail($id);
        $input = $request->all();
        return $djiclearing->fill($input)->save(); 
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\uuid  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $djiclearing = Djiclearing::findOrFail($id);
        $djiclearing->delete();
    }
}

