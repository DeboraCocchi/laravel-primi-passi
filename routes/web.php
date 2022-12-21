<?php

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

Route::get('/', function () {

    $quotes=["Tra chi vince in battaglia mille volte mille nemici e chi soltanto vince se stesso, costui è il migliore dei vincitori di ogni battaglia.",
    "Come un lago profondo, completamente calmo e trasparente, altrettanto sereni divengono i Saggi, allorchè hanno ascoltato [le verità] della legge.",
    "Pochi sono fra gli uomini quegli esseri che toccano l'altra sponda [il Nirvana, l'Estinzione]; tutta questa altra gente, invece, corre su e giù per la spiaggia.",
    "Attento fra i disattenti, ben sveglio fra gli addormentati, il Saggio procede distanziando gli altri come un corsiere llontana il ronzino.", "Da lontano risplendono i buoni come le nevose montagne [l'Himalaya]; non si vedono, invece, i malvagi, come frecce scagliate nell'oscurità."
];
    return view('index', compact('quotes'));
});
