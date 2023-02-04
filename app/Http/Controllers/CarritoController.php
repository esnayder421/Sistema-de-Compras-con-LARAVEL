<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Exists;

class CarritoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Carrito::all();
        $cantidad = Carrito::all()->count();
        return view('productos.index')->with(['data'=>$productos, 'cantidad'=>$cantidad]);
        //return $productos;
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
        session_start();

        $productos = Carrito::all();
        $cantidad = Carrito::all()->count();
        $producto = request()->except('_token');
        if(!isset($_SESSION['carrito'])){
            $_SESSION['carrito'][0] = array($producto);
        }else{
            $contador= count($_SESSION['carrito']);
            $_SESSION['carrito'][$contador] = array($producto);
        }
        $contenido_carrito=$_SESSION['carrito'];

              for ($i = 0; $i < count($contenido_carrito); $i++) {
                $insertar =$contenido_carrito[$i];


            }
            $objeto=$insertar;


        return view('productos.index')->with(['data'=>$productos, 'cantidad'=>$cantidad,'carrito'=> $contenido_carrito]);
        //return $contenido_carrito;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function show(Carrito $carrito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function edit(Carrito $carrito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carrito $carrito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carrito  $carrito
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carrito $carrito)
    {
        //
        unset($_SESSION['carrito']);
    }
}
