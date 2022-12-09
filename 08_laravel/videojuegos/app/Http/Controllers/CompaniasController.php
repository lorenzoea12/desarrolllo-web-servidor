<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compania;
use DB;

class CompaniasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // Aquí iría la lógica del método
         $mensaje = "Esta es la lista de companias";

        //  $videojuegos =[
        //      ["Pokemon Púrpura",50,7,"Videojuego de rol en desarrollo por Game Freak y publicados por Nintendo y The Pokémon Company para Nintendo Switch. Fueron anunciados en el Pokémon Presents de febrero de 2022 como videojuegos de mundo abierto."],
        //      ["Mount And Blade",40,18,"Mount & Blade es una serie de videojuegos de rol de acción desarrollados por TaleWorlds Entertainment. La serie se desarrolla principalmente en el mundo de fantasía de Calradia que se parece mucho a la Europa medieval y el Medio Oriente, las expansiones se han producido durante diferentes períodos de la historia."],
        //      ["Fifa 23",70,12,"Videojuego simulador de fútbol"],
        //      ["Brawl Stars",0,7,"Brawl Stars es un videojuego multijugador para móviles disponible en Android e iOS, desarrollado por Supercell y lanzado globalmente en 2018."]
        //  ];
 
            $companias = Compania::all(); //Trae de la base de datos todos los insert de Videojuego 
                                        //y los almacena en $videojuegos
 
         return view('companias/index',[
             'mensaje' => $mensaje,       //Se le pasa un array con la lista de variables que queremos pasar
            'companias' => $companias,
         ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        
        return view('companias/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $compania=new Compania;
        $compania -> nombre=$request -> input ('nombre');
        $compania -> sede=$request -> input ('sede');
        $compania -> fecha_fundacion=$request -> input('fecha_fundacion');
        $compania-> save();
        

        return redirect('companias');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $compania = Compania::find($id);

        return view('companias/show',
            [
                'compania' => $compania
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
        $compania = Compania::find($id);

        return view('companias/edit',
            [
                'compania' => $compania
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
        $compania=Compania::find($id);

        $compania -> nombre = $request -> input('nombre');
        $compania -> sede = $request -> input('sede');
        $compania -> fecha_fundacion = $request -> input('fecha_fundacion');


        $compania -> save();

        return redirect('companias');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('companias')-> where ('id','=',$id)->delete();

        return redirect('companias');
    }
}
