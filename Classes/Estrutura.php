<?php
/**
 * Estrutura Básica.
 * @author Guilherme Borges
 */
class Estrutura {
    
    public function getParametroGet($sParametro) {
        return $_GET[$sParametro];
    }
    
    public function getParametroSession($sParametro) {
        return $_SESSION[$sParametro];
    }
}
