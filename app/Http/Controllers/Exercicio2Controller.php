<?php

namespace App\Http\Controllers;

class Exercicio2Controller extends Controller
{
    public function index()
    {
        $digitos = array();
        $digitos = range(0, 6);
        shuffle($digitos);        
        $digitosToString = implode(",", $digitos);
        $digitos = explode(",", $digitosToString);        
        unset($digitosToString);      
        
        $digitosWithoutLast = $digitos;
        unset($digitosWithoutLast[count($digitosWithoutLast)-1]);            

        return view('exercicio-2', [
            'digitos' => $digitos,
            'digitosToString' => implode(",", $digitos),
            'hasValor14' => $this->hasValorInArray(14, $digitos),
            'digitosWithoutLast' => implode(",", $digitosWithoutLast),
            'digitosReversos' => implode(",", array_reverse($digitos, true)),
            'digitosRemovidos' => implode(",", $this->removerPosicoes($digitos))
        ]);
    }

    /**
     * Método responsável por verificar se existir um determinando dígito no array informado
     * @param int $digito
     * @param array $digitos
     * @return bool
     */
    protected function hasValorInArray(int $digito, array $digitos): bool
    {
        return in_array($digito, $digitos);
    }    

    /**
     * Método responsável por remover digitos no array com base em seus valores recursivamente
     * @param array $digitos
     * @return array
     */
    protected function removerPosicoes(array $digitos): array
    {            
        foreach($digitos as $key => $digito) {                        
            if(isset($digitos[$key-1]) && $digito < $digitos[$key-1]) {                
                unset($digitos[$key]);                                 
                return $this->removerPosicoes(array_values($digitos));                           
            }            
        }                

        return $digitos;
    }
}
