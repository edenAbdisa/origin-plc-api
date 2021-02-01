<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ethclearing;
class EthclearingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Ethclearing::all();
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
        $ethclearing=Ethclearing::create($input);
       return $ethclearing->save()? $ethclearing : "Couldnt save Ethclearing" ;
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ethclearing  $ethclearing
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Ethclearing::find($id);
    }

    public function update(Request $request,  $id)
    {
        $ethclearing = Ethclearing::findOrFail($id);
        $input = $request->all();
        return $ethclearing->fill($input)->save(); 
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\uuid  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $ethclearing = Ethclearing::findOrFail($id);
        $ethclearing->delete();
    }
}
