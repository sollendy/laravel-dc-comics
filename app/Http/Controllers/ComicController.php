<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        return view('comics/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validation($request);
        $formData = $request->all();
        $newComic = new Comic();
        $newComic->fill($formData);
        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
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
    public function edit(Comic $comic)
    {
        return view("comics/edit", compact("comic"));    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $pasta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $this->validation($request);
        $formData = $request->all();
        $comic->update($formData);
        $comic->save();
        return redirect()->route("comics.show", $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $pasta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route("comics.index");
    }
    private function validation($request) {
         // controlla che i parametri del form rispettino le regole che indichiamo
        // $request->validate([
        //     'title' => 'required|max:50|min:5',
        //     'src' => 'required|max:255',
        //     'type' => 'required|max:200',
        //     'cooking_time' => 'nullable|max:10',
        //     'weight' => 'required|max:10',
        //     'description' => 'required|min:10',
        // ]);
        // in caso NON le rispettino (ne basta una), fa tornare l'utente
        // alla rotta precedente, passandogli un array di errori chiamato $errors
        

        
        // dobbiamo prendere solo i parametri del form, utilizziamo quindi il metodo all()
        $formData = $request->all(); 
        
        // l'import da fare qui è del Validator (ce ne sono tanti) con questo percorso:
        // Illuminate\Support\Facades\Validator;
        // passiamo i parametri del form al metodo statico  make() di Validation
        $validator = Validator::make($formData, [
            // qui ci dobbiamo inserire un array di regole (quelle che abbiamo usato sino a prima)
            'title' => 'required|max:50|min:5',
            'description' => 'required|max:1500',
            'series' => 'required|max:50',
            'thumb' => 'nullable|max:255',
            'type' => 'required|max:20',
            'sale_date' => 'required|min:10',
            'price' => 'required|max:10',
        ], [
            // dobbiamo inserire qui un insieme di messaggi da comunicare all'utente per ogni errore che vogliamo modificare
            'title.required' => 'Guarda compare, un titolo me lo devi dare.',
            'title.max' => 'Il titolo non deve essere più lungo di 50 caratteri',
            'title.min' => 'Il titolo non deve essere più corto di 5 caratteri',
            "description.required" => "come speri di vendere sto fumetto se non dici manco una parola a riguardo?",
            "description.max" => "se scrivi più di 1500 caratteri la gente ha già cambiato saga da leggere.",
            "series.required" => "magari dire la saga del volume?",
            "series.max" => "il nome della saga e non un papiro.",
            // 'thumb.required' => "Il link dell'immagine deve essere indicato",
            'thumb.max' => "Il link dell'immagine non deve essere più lungo di 255 caratteri",
            "type.required" => "penso che i clienti debbano sapere se stanno comprando un fumetto o un ricettacolo",
            "type.max" => "non ti servono più di 20 caratteri per dirmi se mi stai vendendo un fumetto o altro",
            "sale_date.required" => "voglio sapere la data di uscita. Perché sì.",
            "sale_date.max" => "te ne ho concessi massimo 10 caratteri e pensavo fossero assai pergiunta.",
            "price.required" => "qua non regaliamo niente.",
            "price.max" => "con sto prezzo manco il papa lo prende.",

        ])->validate();

        // importante, visto che siamo in una funzione, dobbiamo restituire un valore, il validator gestisce questo campo e in caso trovasse un errore farebbe
        // in automatico il redirect
        return $validator;
    }
}