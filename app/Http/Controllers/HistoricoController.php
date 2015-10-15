<?php

namespace sim\Http\Controllers;
use Illuminate\Http\Request;
use sim\Http\Requests;
use sim\Http\Controllers\Controller;

class HistoricoController extends Controller
{

    Public function Itaee ( )
    {
    
    return view ('Historico.Itaee');   //
    }
    
    Public function Trabajadores ()
    {
    
    return view ('Historico.Trabajadores');   //
    }

    Public function Deso_men ()
    {
    
    return view ('Historico.Deso_men');   //
    }

    Public function Deso_trim ()
    {
    
    return view ('Historico.Deso_trim');   //
    }

    Public function Trim_deso ()
    {
    
    return view ('Historico.Trim_deso');   //
    }

    Public function Infla_mensual ()
    {
    
    return view ('Historico.Infla_mensual');   //
    }
    Public function llegada_tur ()
    {
    
    return view ('Historico.llegada_tur');   //
    }
    Public function por_ocupa ()
    {
    
    return view ('Historico.por_ocupa');   //
    }

    Public function estadia ()
    {
    
    return view ('Historico.estadia');   //
    }

    Public function inver_ext_pue ()
    {
    return view ('Historico.inver_ext_pue');   //
    }
    Public function Historico ($variable)
    {
    return view ('Historico.data_historico', compact('variable'));
    }
    Public function datos ()
    {
    $vars=\sim\llegada_tur::where('anio', '>', 2012)->take(100)->get();
    return view ('Historico.base_cons', compact('vars'));
    }

    Public function datos1 ()
    {
    $vars=\sim\por_ocupa::where('anio', '>', 2012)->take(100)->get();
    return view ('Historico.base_cons1', compact('vars'));
    }
    Public function datos2 ()
    {
    $vars=\sim\estadia::where('anio', '>', 2012)->take(100)->get();
    return view ('Historico.base_cons2', compact('vars'));
    }
    Public function datos3 ()
    {
    $vars=\sim\inver_ext_pue::where('anio', '>', 2012)->take(100)->get();
    return view ('Historico.base_cons3', compact('vars'));
    }

}


















