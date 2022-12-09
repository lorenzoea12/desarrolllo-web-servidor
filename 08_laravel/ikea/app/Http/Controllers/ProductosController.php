<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos=Producto::all();
        return view('productos/index',
        [

            'productos' => $productos
        ]
        
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria=Categoria::all();
        return view ('productos/create',
        [
            'categorias'=>$categoria
        ]
    );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto=new Producto();
        $producto-> nombre=$request -> input ('nombre');
        $producto -> precio=$request -> input ('precio');
        $producto -> fecha_lanzamiento=$request -> input('fecha_lanzamiento');
        $producto -> descripcion =$request -> input('descripcion');
        $producto -> categoria_id =$request -> input('categoria_id');
        $producto -> save();
        

        return redirect('productos');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto=Producto::find($id);
        return view('productos/show',
        [
            'producto'=>$producto
        ]
    );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto=Producto::find($id);
        return view('productos/edit',
        [
            'producto'=>$producto
        ]
    );
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
        $producto=Producto::find($id);

        $producto -> nombre = $request -> input('nombre');
        $producto -> precio = $request -> input('precio');
        $producto -> fecha_lanzamiento = $request -> input('fecha_lanzamiento');
        $producto -> descripcion = $request -> input('descripcion');

        $producto -> save();

        return redirect('productos');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('productos')-> where ('id','=',$id)->delete();

        return redirect('productos');
}

}