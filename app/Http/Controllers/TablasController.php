<?php

namespace sim\Http\Controllers;

use Illuminate\Http\Request;
use sim\Http\Requests;
use sim\Http\Controllers\Controller;

class TablasController extends Controller
{
    
    Public function tablas ($variable)
    {
    return view ('Tablas.tablas', compact('variable'));
    }

    Public function impre ($variable)
    {
    return view ('Tablas.impre', compact('variable'));
    }   
    Public function meta ($variable)
    {
    return view ('Tablas.meta', compact('variable'));
    }   
    Public function concepto ($variable)
    {
    return view ('Tablas.def', compact('variable'));
    }   
}
