<?php

//Requisitando o arquivo confi.php, para fazer uso das constantes. 
require dirname(dirname(__FILE__)).'/config/Config.php';

//Função __Autoload();
function __autoload($classe){
    try{
        $classe = str_replace('..','',$classe);
        
        if(file_exists(BSPH.CONTROLLERPH.DS.$classe.'.php')):
            require BSPH.CONTROLLERPH.DS.$classe.'.php';
        elseif(file_exists(BSPH.MODELPH.DS.$classe.'.php')):
            require BSPH.MODELPH.DS.$classe.'.php';
        elseif(file_exists(BSPH.DS.LIBPH.DS.$classe.'.php')):
            require BSPH.DS.LIBPH.DS.$classe.'.php';
        elseif(file_exists(BSPH.DS.UTILPH.DS.$classe.'.php')):
            require BSPH.DS.UTILPH.DS.$classe.'.php';
        endif;
        
    }catch(Exception $e){
        throw new Exception('As classes não estão sendo requeridas pela função __autoload(). Por favor contate o administrador', 0, $e);
    }
}

