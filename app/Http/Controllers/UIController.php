<?php

namespace App\Http\Controllers;
/**use App\accounting;*/
use Illuminate\Http\Request;
use Exception;
use App\Http\Requests;

class UIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sample()
    {
      return view('regi');
    }
}
