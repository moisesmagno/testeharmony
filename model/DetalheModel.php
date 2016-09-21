<?php

class DetalheModel{
    private $iddet;
    private $fiwi;
    private $acessodefic;
    private $estacionamento;
    private $outrasunidades;
    
    public function setIdDet($iddet){
        $this->iddet = $iddet;
    }
    
    public function getIdDet(){
        return $this->iddet;
    }
    
    public function setFiwi($fiwi){
        $this->fiwi = $fiwi;
    }
    
    public function getFiwi(){
        return $this->fiwi;
    }
    
    public function setAcessoDefic($acessodefici){
        $this->acessodefic = $acessodefici;
    }
    
    public function getAcessoDefic(){
        return $this->acessodefic;
    }
    
    public function setEstacionamento($estacionamento){
        $this->estacionamento = $estacionamento;
    }
    
    public function getEstacionamento(){
        return $this->estacionamento;
    }
    
    public function setOutrasUnidades($outrasunidades){
        $this->outrasunidades = $outrasunidades;
    }
    
    public function getOutrasUnidades(){
        return $this->outrasunidades;
    }
}