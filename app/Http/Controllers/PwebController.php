<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pweb;

class PwebController extends Controller
{
    public function index()
    {
        $pweb = Pweb::all();
        return view('pweb.index', ['pwebs' => $pweb]);
    }
}
