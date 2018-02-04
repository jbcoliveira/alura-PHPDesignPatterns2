<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EstadoConcluido
 *
 * @author joao
 */
class EstadoConcluido implements Estado {

    public function avanca($contrato) {
        throw new Exception('Não existe mais estados.');
    }


}
