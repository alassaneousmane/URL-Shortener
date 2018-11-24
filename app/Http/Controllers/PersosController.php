<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersosController extends Controller
{
    //
    public function say($issue) {
    	// $issue = 'PROCASTINATION';
		return view('perso.toure_aa', compact('issue'));
    }
}
