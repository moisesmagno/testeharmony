<?php

    Class ClienteModel{
        private $id;
        private $nome;
        private $email;
        private $site;
        private $cidade;
        private $endereco;
        private $complemento;
        private $bairro;
        private $cep;
        private $logotipo;
        private $status;
        private $estado;
        private $detalhes;
        private $telefone;
        private $destaque;
        
        public function setId($id){
            $this->id = $id;
        }
        
        public function getId(){
            return $this->id;
        }
        
        public function setNome($nome){
            $this->nome = $nome;
        }
        
        public function getNome(){
            return $this->nome;
        }
        
        public function setEmail($email){
            $this->email = $email;
        }
        
        public function getEmail(){
            return $this->email;
        }
        
        public function setSite($site){
            $this->site = $site;
        }
        
        public function getSite(){
            return $this->site;
        }
        
        public function setCidade($cidade){
            $this->cidade = $cidade;
        }
        
        public function getCidade(){
            return $this->cidade;
        }
        
        public function setEndereco($endereco){
            $this->endereco = $endereco;
        }
        
        public function getEndereco(){
            return $this->endereco;
        }
        
        public function setComplemento($complemento){
            $this->complemento = $complemento;
        }
        
        public function getComplemento(){
            return $this->complemento;
        }
        
        public function setBairro($bairro){
            $this->bairro = $bairro;
        }
        
        public function getBairro(){
            return $this->bairro;
        }
        
        public function setCep($cep){
            $this->cep = $cep;
        }
        
        public function getCep(){
            return $this->cep;
        }
        
        public function setLogotipo($logotipo){
            $this->logotipo = $logotipo;
        }
        
        public function getLogotipo(){
            return $this->logotipo;
        }
        
        public function setStatus($estatus){
            $this->status = $estatus;
        }
        
        public function getStatus(){
            return $this->status;
        }
        
        public function setEstado($estado){
            $this->estado = $estado;
        }
        
        public function getEstado(){
            return $this->estado;
        }
        
        public function setarEstado($iduf=null, $estado=null, $sigla=null){
            $uf = new EstadoModel();
            $uf->setIdUf($iduf);
            $uf->setEstado($estado);
            $uf->setSigla($sigla);
            
            $this->setEstado($uf);
        }
        
        public function setDetalhes($detalhes){
            $this->detalhes = $detalhes;
        }
        
        public function getDetalhes(){
            return $this->detalhes;
        }
        
        public function setarDetalhes($fiwi = null, $acessodefic = null, $estacionamento = null, $outrasunidades = null, $iddet=null){
            $dt = new DetalheModel();
            $dt->setFiwi($fiwi);
            $dt->setAcessoDefic($acessodefic);
            $dt->setEstacionamento($estacionamento);
            $dt->setOutrasUnidades($outrasunidades);
            $dt->setIdDet($iddet);
            
            $this->setDetalhes($dt);
        }
        
        public function setTelefones($telefone){
            $this->telefone = $telefone;
        }
        
        public function getTelefones(){
            return $this->telefone;
        }
        
        public function setarTelefones($fixo = null, $idtel = null, $celular = null, $fax= null){
            $tl = new TelefoneModel();
            $tl->setFixo($fixo);
            $tl->setIdTel($idtel);
            $tl->setCelular($celular);
            $tl->setFax($fax);
            
            $this->setTelefones($tl);
        }
        
        
        public function setDestaque($destaque){
            $this->destaque = $destaque;
        }
        
        public function getDestaque(){
            return $this->destaque;
        }
    }