<?php
/**
 * @Author: Roque
 * @Date:   2017-08-15 23:48:58
 * @Last Modified by:   Roque  Amilpa
 * @Last Modified time: 2017-08-16 22:23:44
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipo_inmueble;
class TiposInmuebleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Tipo_inmueble::all());                
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
        $tipo_inmueble = Tipos_inmueble::where('id', $id)->get();
        if(!empty($tipos_inmueble['items'])){
            return response()->json($tipos_inmueble);
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
            'nombre' => 'required'
         ]);

        $tipo_inmueble = new Tipos_inmueble();
        $tipo_inmueble->nombre = $request->nombre;                
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
            'nombre' => 'required'
        ]);

        $tipo_inmueble = Tipos_inmueble::find($id);
        $tipo_inmueble->nombre = $request->nombre;    
        $tipo_inmueble->save();
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
        if(Tipos_inmueble::destroy($id)){
            return response()->json(['status' => 'success']);
        }
    }
}
?>