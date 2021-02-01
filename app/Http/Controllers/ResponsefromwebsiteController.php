<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Responsefromwebsite;
class ResponsefromwebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Responsefromwebsite::all();
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
        $responsefromwebsite=Responsefromwebsite::create($input);
       return $responsefromwebsite->save()? $responsefromwebsite : "Couldnt save Responsefromwebsite" ;
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Responsefromwebsite  $responsefromwebsite
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Responsefromwebsite::find($id);
    }

    public function update(Request $request,  $id)
    {
        $responsefromwebsite = Responsefromwebsite::findOrFail($id);
        $input = $request->all();
        return $responsefromwebsite->fill($input)->save(); 
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\uuid  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $responsefromwebsite = Responsefromwebsite::findOrFail($id);
        $responsefromwebsite->delete();
    }
}
