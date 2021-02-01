<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
class ItemController extends Controller
{
    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Item::all();
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
        $item=Item::create($input);
       return $item->save()? $item : "Couldnt save Item" ;
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Item::find($id);
    }

    public function update(Request $request,  $id)
    {
        $item = Item::findOrFail($id);
        $input = $request->all();
        return $item->fill($input)->save(); 
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\uuid  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $item = Item::findOrFail($id);
        $item->delete();
    }
}
