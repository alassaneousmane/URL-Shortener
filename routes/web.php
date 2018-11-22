<?php

use App\Url;
use Illuminate\Http\Request;

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
    return view('welcome');
});

Route::post('/', function() {
	$url = request('url');
    
    // Valider l'url
    $validation = Validator::make(compact('url'),
    							  ['url' => ['required', 'url']]
    							  )->validate(); // Valide et redirige vers la page précédente
  
    // Vérifier si l'url a été raccourcié et la retourner
	$record = Url::whereUrl($url)->first();

	if($record) {
		return view('result', ['shortened' => $record->shortened, 'generated_at' => new \DateTime($record->generated_at)]);
	}


    // Sinon  créé une nouvelle short url
	$row = Url::create([
		'url' => $url,
		'shortened' => Url::getUniqueShortUrl(),
		'generated_at' => new DateTime()
	]);

	if($row) {

		return view('result', ['shortened' => $row->shortened, 'generated_at' => new \DateTime($row->generated_at)]);
	}
    // Félicitations voici l'url raccourcie
});

Route::get('/{shortened}', function($shortened) {
	$url = Url::whereShortened($shortened)->first();
	
	if($url) {
		return redirect($url->url);
	} else {
		return Redirect::to('/');
	}
});

Route::get('/TOURE_AA', function(){
	$issue = 'PROCASTINATION';
	return view('perso.toure_aa', compact('issue'));
});
