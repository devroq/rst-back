<?php

/**
 * @Author: Roque
 * @Date:   2017-08-15 23:48:58
 * @Last Modified by:   Roque  Amilpa
 * @Last Modified time: 2017-08-16 22:23:44
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipos_inmueble;
class TiposInmuebleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return response()->json([
             'name' => 'Abigail',
             'state' => 'CA'
          ]);
        $tipos_inmueble = Tipos_inmueble::all();
        return response()->json($tipos_inmueble);
    }

    /**
     * Get the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $book = Books::where('id', $id)->get();
        if(!empty($book['items'])){
            return response()->json($book);
        }
        else{
            return response()->json(['status' => 'fail']);
        }
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
        $this->validate($request, [
        'name' => 'required',
        'description' => 'required',
        'category' => 'required',
        'published_on' => 'required'
         ]);

        $book = new Books();
        $book->name = $request->name;
        $book->description = $request->description;
        $book->category = $request->category;
        $date = new \DateTime($request->published_on);
        $dd = $date->format('Y-m-d');
        $book->published_on = $dd; 
        $book->save();
        return response()->json(['status' => 'success']);
        
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
        $this->validate($request, [
        'name' => 'required',
        'description' => 'required',
        'category' => 'required',
        'published_on' => 'required'
         ]);

        $book = Books::find($id);
        $book->name = $request->name;
        $book->description = $request->description;
        $book->category = $request->category;
        $date = new \DateTime($request->published_on);
        $dd = $date->format('Y-m-d');
        $book->published_on = $dd; 
        $book->save();
        return response()->json(['status' => 'success']);
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
        if(Books::destroy($id)){
             return response()->json(['status' => 'success']);
        }
    }
}
?>