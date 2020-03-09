<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArquivoController extends Controller
{
    public function enviar(Request $r)
    {
        // return dd($r->all());       
        
        $arq = $r->arquivo;
        if ($arq->isValid() && $r->hasFile('arquivo')) 
        {
            $path = $r->file('arquivo')->store('images');
        }
        else
        {
            return 'deu zebra';
        }

        return $path;
    }
}
