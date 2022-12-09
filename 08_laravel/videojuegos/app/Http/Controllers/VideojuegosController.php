<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videojuego;
use App\Models\Compania;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class VideojuegosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // Aquí iría la lógica del método
         $mensaje = "Esta es la lista de videojuegos";

        //  $videojuegos =[
        //      ["Pokemon Púrpura",50,7,"Videojuego de rol en desarrollo por Game Freak y publicados por Nintendo y The Pokémon Company para Nintendo Switch. Fueron anunciados en el Pokémon Presents de febrero de 2022 como videojuegos de mundo abierto."],
        //      ["Mount And Blade",40,18,"Mount & Blade es una serie de videojuegos de rol de acción desarrollados por TaleWorlds Entertainment. La serie se desarrolla principalmente en el mundo de fantasía de Calradia que se parece mucho a la Europa medieval y el Medio Oriente, las expansiones se han producido durante diferentes períodos de la historia."],
        //      ["Fifa 23",70,12,"Videojuego simulador de fútbol"],
        //      ["Brawl Stars",0,7,"Brawl Stars es un videojuego multijugador para móviles disponible en Android e iOS, desarrollado por Supercell y lanzado globalmente en 2018."]
        //  ];
 
            $videojuegos = Videojuego::all(); //Trae de la base de datos todos los insert de Videojuego 
                                        //y los almacena en $videojuegos
 
         return view('videojuegos/index',[
             'mensaje' => $mensaje,       //Se le pasa un array con la lista de variables que queremos pasar
             'videojuegos' => $videojuegos
         ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $compania=Compania::all();
        return view('videojuegos/create',
   
    [
        'companias'=> $compania
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
       $videojuego=new Videojuego;
        $videojuego -> titulo=$request -> input ('titulo');
        $videojuego -> precio=$request -> input ('precio');
        $videojuego -> pegi=$request -> input('pegi');
        $videojuego -> descripcion =$request -> input('descripcion');
        $videojuego -> compania_id =$request -> input('compania_id');
        $videojuego -> save();
        

        return redirect('videojuegos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $videojuego=Videojuego::find($id);
        return view('videojuegos/show',
        [
            'videojuego'=>$videojuego
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
        $videojuego = Videojuego::find($id);

        return view('videojuegos/edit',
            [
                'videojuego' => $videojuego
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
        $videojuego=Videojuego::find($id);

        $videojuego -> titulo = $request -> input('titulo');
        $videojuego -> precio = $request -> input('precio');
        $videojuego -> pegi = $request -> input('pegi');
        $videojuego -> descripcion = $request -> input('descripcion');

        $videojuego -> save();

        return redirect('videojuegos');

        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('videojuegos')-> where ('id','=',$id)->delete();

        return redirect('videojuegos');
    }






/**
 * Busca todos los videojuegos  que contengan 
 * la palabra introducida en el buscador
 * @param string $titulo 
 * @return \Illuminate\Http\Response
 */


 public function search(Request $request){


    $titulo = $request -> input('titulo');
    $videojuegos= DB::table('videojuegos') -> where ('titulo', 'like','%'.$titulo.'%') -> get();
                                           
    return view('videojuegos/search',
    [
        'videojuegos' => $videojuegos
    ]

 );
}
}