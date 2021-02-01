<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Itemtype;
class ItemtypeController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       return Itemtype::all();
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
       $itemtype=Itemtype::create($input);
      return $itemtype->save()? $itemtype : "Couldnt save Itemtype" ;
  
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Itemtype  $itemtype
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
       return Itemtype::find($id);
   }

   public function update(Request $request,  $id)
   {
       $itemtype = Itemtype::findOrFail($id);
       $input = $request->all();
       return $itemtype->fill($input)->save(); 
   }
   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\uuid  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy( $id)
   {
       $itemtype = Itemtype::findOrFail($id);
       $itemtype->delete();
   }
}
