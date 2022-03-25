<?php
require_once 'Classes/Estrutura.php';
/**
 * Classe que armazena os números do campo.
 * @author Guilherme Borges
 */
class Armazem {
    
    public function getNumeroCampoAtual() {
        if (isset($_SESSION['numeroCampoAtual'])) {
            return $_SESSION['numeroCampoAtual'];
        }
    }

    public function getNumeroTotal() {
        return $_SESSION['numeroTotal'];
    }

    public function getValorAtual() {
        return $_SESSION['ValorAtual'];
    }

    public function setNumeroCampoAtual($numeroCampoAtual) {
        $_SESSION['numeroCampoAtual'] = $numeroCampoAtual;
    }

    public function setNumeroTotal($numeroTotal) {
        if (!isset($_SESSION['numeroTotal'])){
            $_SESSION['numeroTotal'] = $numeroTotal;
        } else {
            $_SESSION['numeroTotal'] .= $numeroTotal;
        }
    }

    public function setValorAtual($ValorAtual) {
        $_SESSION['ValorAtual'] = $ValorAtual;
    }
    
    public function getValorAnterior() {
        return $_SESSION['ValorAnterior'];
    }

    public function setValorAnterior($ValorAnterior) {
        $_SESSION['ValorAnterior'] = $ValorAnterior;
    }

    
    public function zeraNumeroTotal() {
        $_SESSION['numeroTotal'] = '';
    }

}
