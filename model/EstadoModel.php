<?php

    class EstadoModel{
        private $iduf;
        private $estado;
        private $sigla;
        
        public function setIdUf($iduf){
            $this->iduf = $iduf;
        }
        
        public function getIdUf(){
            return $this->iduf;
        }
        
        public function setEstado($estado){
            $this->estado = $estado;
        }
        
        public function getEstado(){
            return $this->estado;
        }
        
        public function setSigla($sigla){
            $this->sigla = $sigla;
        }
        
        public function getSigla(){
            return $this->sigla;
        }
    }

