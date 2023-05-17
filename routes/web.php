<?php

use App\Http\Controllers\ComicController;
use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


$shopPics = [
    [
        "img" => 'resources/images/buy-comics-digital-comics.png',
        "testo" => "DIGITAL COMICS"
    ],
    [
        "img" => 'resources/images/buy-comics-merchandise.png',
        "testo" => "DC MERCHANDISE"
    ],
    [
        "img" => 'resources/images/buy-comics-shop-locator.png',
        "testo" => "SUBSCRIPTION"
    ],
    [
        "img" => 'resources/images/buy-comics-subscriptions.png',
        "testo" => "COMIC SHOP LOCATOR"
    ],
    [
        "img" => 'resources/images/buy-dc-power-visa.svg',
        "testo" => "DC POWER VISA"
    ],
];
$referenze = [
    [
        "titolo" => "DC COMICS",
        "link" => [
            'personaggi',
            'fumetti',
            'film',
            'tv',
            'giochi',
            'video',
            'notizie',
        ]
    ],
    [
        "titolo" => "DC",
        "link" => [
            'Termini di Utilizzo',
            'Accordo Riservatezza',
            'Aggiungi scelta',
            'Avvertenze',
            'Impieghi',
            'Iscrizioni',
            'Laboratori Talenti',
            'Certificati CPSC',
            'Recensioni',
            'Guida Acquisti',
            'Contattaci',
        ]
    ],
    [
        "titolo" => "RISORSE",
        "link" => [
            'DC',
            'MAD magazine',
            'DC & Ragazzi',
            'Universo DC',
            'DC Power Visa',
        ]
    ],
    [
        "titolo" => "NEGOZIO",
        "link" => [
            'Negozio DC',
            'Negozio DC Collezionabili',
        ]
    ],
];
//quello di sotto è obsoleto perché per mandare tutto a home posso fare tutto in una route e due route uguali a home daranno errore 
// Route::get('/', function () use ($headLinks){
//     return view('home', compact('headLinks'));
// });

//la route di sotto è ora obsoleta non perché incorretta ma perché abbiamo popolato staticamente i vari elenchi per non appesantire il server una volta che si lavora con i database, pertanto, gli array in alto si possono anche ignorare
// Route::get('/', function () use($headLinks, $shopPics, $referenze) {
//     $fumetti = config("comics");
//     return view('home', compact("fumetti", "headLinks", "shopPics", "referenze"));
// });
Route::resource("/comics", ComicController::class);