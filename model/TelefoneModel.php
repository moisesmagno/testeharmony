<?php
    class TelefoneModel{
        private $idtel;
        private $fixo;
        private $celular;
        private $fax;
        
        
        public function setIdTel($idtel){
            $this->idtel = $idtel;
        }
        
        public function getIdTel(){
            return $this->idtel;
        }
        
        public function setFixo($fixo){
            $this->fixo = $fixo;
        }
        
        public function getFixo(){
            return $this->fixo;
        }
        
        public function setCelular($celular){
            $this->celular = $celular;
        }
        
        public function getCelular($celular){
            return $this->celular;
        }
        
        public function setFax($fax){
            $this->fax = $fax;
        }
        
        public function getFax(){
            return $this->fax;
        }
        
    }
