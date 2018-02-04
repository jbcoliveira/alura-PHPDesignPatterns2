<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EstadoEmAndamento
 *
 * @author joao
 */
 class EstadoEmAndamento implements Estado {

    public function avanca($contato) {
        $contato->setEstado( new EstadoAcertado());
        return $contato; 
    }


}
