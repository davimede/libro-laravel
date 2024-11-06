<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function libros()
    {
        return view('libros');
    }

    public function show(){
        $libros = Libro::all();

        $libros = Libro::where('ano','>',2000)->orderBy('ano','desc')->get();
        //$libros = Libro::orderBy('ano','desc')->get();

        //$libros = Libro::all();
        return view('show', ['libros' => $libros]);
        //return view('show', ['libros' => ['Star Wars Saga', 'The little prince']]);
        //return view('show', compact('libros'));
    }

    public function update(){
        /*$libro = Libro::find(1);

        $libro->isan= '102023012';
        $libro->titulo= 'The little prince';
        $libro->ano= '1920';

        $libro->save();*/

        $libro = Libro::where('id', 1)->update(['titulo'=>'Titulo actualizado']);
        //libro = Libro::where('ano', '<', 1950)->get();

        $libro = Libro::find(1);

        return view('update', compact('libro'));
    }

    public function create(){
        $libro = new Libro();
        
        $libro->isan = '102023015';
        $libro->titulo = 'Star Wars X';
        $libro->ano = '2024';
        $libro->director = 'Kevin hoetler jr';

        $libro->save();

        return $libro;
    }

    public function delete(){
        $libro = Libro::find(1);

        $libro->delete();

        return $libro;
    }

    public function store(Request $request){
        $libro = new Libro();
        
        $libro->isan = $request->isan;
        $libro->titulo = $request->titulo;
        $libro->ano = $request->ano;
        $libro->director = $request->director;

        $libro->save();

        return $libro;
    }
}
