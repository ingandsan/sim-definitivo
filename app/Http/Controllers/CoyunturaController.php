<?php

namespace sim\Http\Controllers;

use Illuminate\Http\Request;
use sim\Http\Requests;
use sim\Http\Controllers\Controller;

class CoyunturaController extends Controller
{
    Public function pib_nac ()
    {
    return view ('Coyuntura.pib_nac');   //
    }

    Public function pib_pue ()
    {
    return view ('Coyuntura.pib_pue');   //
    }
    Public function pib ()
    {
    return view ('Coyuntura.pib');   //
    }
    Public function indice_itaee ()
    {
    return view ('Coyuntura.indice_itaee');   //
    }
    Public function variacion_itaee ()
    {
    return view ('Coyuntura.variacion_itaee');   //
    }

    Public function indice_itaee_primarias ()
    {
    return view ('Coyuntura.indice_itaee_primarias');   //
    }
    Public function variacion_itaee_primarias ()
    {
    return view ('Coyuntura.variacion_itaee_primarias');   //
    }
    Public function indice_itaee_secundarias ()
    {
    return view ('Coyuntura.indice_itaee_secundarias');   //
    }
    Public function variacion_itaee_secundarias ()
    {
    return view ('Coyuntura.variacion_itaee_secundarias');   //
    }
    Public function indice_itaee_tercearias ()
    {
    return view ('Coyuntura.indice_itaee_tercearias');   //
    }
    Public function variacion_itaee_tercearias ()
    {
    return view ('Coyuntura.variacion_itaee_tercearias');   //
    }
    Public function trabajadores_asegurados ()
    {
    return view ('Coyuntura.trabajadores_asegurados');   //
    }
    Public function tasa_deso_trim ()
    {
    return view ('Coyuntura.tasa_deso_trim');   //
    }
    Public function tasa_deso_trim1 ()
    {
    return view ('Coyuntura.tasa_deso_trim1');   //
    }
    Public function tasa_deso_men ()
    {
    return view ('Coyuntura.tasa_deso_men');   //
    }
    Public function inflacion_inter ()
    {
    return view ('Coyuntura.infla_inter');   //
    }
    Public function exportaciones_pue ()
    {
    return view ('Coyuntura.exportaciones_pue');   //
    }
    Public function estadia ()
    {
    return view ('Coyuntura.estadia');   //
    }

    Public function inver_ext_pue ()
    {
    return view ('Coyuntura.inver_ext_pue');   //
    }
    Public function llegada_tur ()
    {
    return view ('Coyuntura.llegada_tur');   //
    }
    Public function ocupacion ()
    {
    return view ('Coyuntura.ocupacion');   //
    }
    Public function tasa_desocupacion ()
    {
    return view ('Coyuntura.tasa_desocupacion');   //
    }
    Public function Datos1 ()
    {
    $vars=\sim\estadia::All();
    return view ('Coyuntura.base_cons1', compact('vars'));    
    } 
    Public function Datos2 ()
    {
    $vars=\sim\inver_ext_pue::where('trimestre', '<>', 'Anual')->take(1000)->get();
    return view ('Coyuntura.base_cons2', compact('vars'));    
    }   
    Public function Datos3 ()
    {
    $vars=\sim\por_ocupa::All();
    return view ('Coyuntura.base_cons3', compact('vars'));    
    }    
    Public function Datos4 ()
    {
    $vars=\sim\llegada_tur::All();
    return view ('Coyuntura.base_cons4', compact('vars'));    
    }   
    Public function Datos5 ()
    {
    $vars=\sim\tasa_deso_trim::All();
    return view ('Coyuntura.base_cons5', compact('vars'));    
    }   

    Public function Coyuntura ($variable)
    {
    return view ('Coyuntura.data_coyuntura', compact('variable'));
    }
}
