<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //lavorando coi database il model prende il sopravvento per mantenere la connessione col suddetto
        $comics = Comic::all();
        // $comics = config("comics");
        return view('comics/index', compact("comics"));
        
        // return $comics = Comic::all();
        // dd($comics);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('comics/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$formData = $request->all();

        //$newPasta = new Pasta();

        
        // $newPasta->title = $formData['title'];
        // $newPasta->description = $formData['description'];
        // $newPasta->type = $formData['type'];
        // $newPasta->src = $formData['src'];
        // $newPasta->cooking_time = $formData['cooking_time'];
        // $newPasta->weight = $formData['weight'];
        
        
        // metodo che in automatico assegna ad ogni proprietà del model il valore che ci passa il form
        //$newPasta->fill($formData);
        
        //$newPasta->save();

        //return redirect()->route('pastas.show', $newPasta->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pasta  $pasta
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {

        return view('comics/show', compact('comic'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pasta  $pasta
     * @return \Illuminate\Http\Response
     */
    // public function edit(Pasta $pasta)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $pasta
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Pasta $pasta)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $pasta
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Pasta $pasta)
    // {
    //     //
    // }
}