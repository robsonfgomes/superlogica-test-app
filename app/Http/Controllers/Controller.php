<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Método responsável por imprimir o conteúdo da variável informada na tela
     * @param mixed $var
     */
    protected static function pre($var)
    {
        echo "<pre>";
        print_r($var);
        echo "</pre>";
        exit;
    }
}
