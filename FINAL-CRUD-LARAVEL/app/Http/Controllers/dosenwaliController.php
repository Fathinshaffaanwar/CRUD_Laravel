<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\dosenwali;

class dosenwaliController extends Controller
{
    public function index()
    {
    	$dosenwali = Dosenwali::all();
    	return view('dosenwali', ['dosenwali' => $dosenwali]);
    }
}
