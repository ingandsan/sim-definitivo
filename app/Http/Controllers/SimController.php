<?php

namespace sim\Http\Controllers;

use Illuminate\Http\Request;
use sim\Http\Requests;
use sim\Http\Controllers\Controller;

class SimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     return view ("index");   //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function historico()
    {
     
     return view ("historico");   //
    }
    
    public function coyuntura()
    {
     
     return view ("coyuntura");   //
    }
    
}
