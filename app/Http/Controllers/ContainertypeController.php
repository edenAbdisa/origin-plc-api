<?php

namespace App\Http\Controllers;

use App\Models\Containertype;
use Illuminate\Http\Request;

class ContainertypeController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        return Containertype::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /**
 * @OA\Post(
 * path="/index",
 * summary="Sign in",
 * description="Login by email, password",
 * operationId="authLogin",
 * tags={"auth"},
 * @OA\RequestBody(
 *    required=true,
 *    description="Pass user credentials",
 *    @OA\JsonContent(
 *       required={"name"},
 *       @OA\Property(property="name", type="string", format="text"),
 *    ),
 * ),
 * @OA\Response(
 *    response=422,
 *    description="Wrong credentials response",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="Sorry, wrong email address or password. Please try again")
 *        )
 *     )
 * )
 */
    public function store(Request $request)
    {    
        $input = $request->all();    
        $containertype=Containertype::create($input);
       return $containertype->save()? $containertype : "Couldnt save Containertype" ;
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Containertype  $containertype
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Containertype::find($id);
    }

    public function update(Request $request,  $id)
    {
        $containertype = Containertype::findOrFail($id);
        $input = $request->all();
        return $containertype->fill($input)->save(); 
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\uuid  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $containertype = Containertype::findOrFail($id);
        $containertype->delete();
    }
}
