<?php

namespace App\Http\Controllers;

use App\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class UrlsController extends Controller
{
    public function create() {
        $urls = Url::all()->sortByDesc('generated_at');

    	return view('welcome')->withUrls($urls);
    }

    public function store(Request $request) {
	  	
	  	$this->validate($request, ['url' => 'required|url']);
	  	$record = $this->getRecordForUrl($request->url); 


		return view('result', ['shortened' => $record->shortened, 'generated_at' => new \DateTime($record->generated_at)]);	

		
    }

    public function show($shortened) {

    	$url = Url::whereShortened($shortened)->firstOrFail();

		return redirect($url->url);
		
    }


    private function getRecordForUrl($url) {

    	 // Vérifier si l'url a été raccourcié et la retourner
    	return Url::firstOrCreate(
    			['url' => $url],
    			['shortened' => Url::getUniqueShortUrl()
    			]
    			);


    }
}
