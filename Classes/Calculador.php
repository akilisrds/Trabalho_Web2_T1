<?php
require_once 'Classes/Estrutura.php';
/**
 * Classe que faz os calculos.
 * @author Guilherme Borges
 */
class Calculador {
    
    public function getOperadorAritmeticos() {
        return $_SESSION['OperadorAritmeticos'];
    }

    public function setOperadorAritmeticos($OperadorAritmeticos) {
        $_SESSION['OperadorAritmeticos'] = $OperadorAritmeticos;
    }

    public function calcular($oArmazem, $iValor1, $iValor2) {
        switch ($this->getOperadorAritmeticos()) {
            case '+':
                $iValor = $iValor1 + $iValor2;
                return $iValor;
                break;
            case '/':
                $iValor = $iValor1 / $iValor2;
                return $iValor;
                break;
            case '-':
                $iValor = $iValor1 - $iValor2;
                return $iValor;
                break;
            case 'X':
                $iValor = $iValor1 * $iValor2;
                return $iValor;
            default:
                break;
        }
    }
}
