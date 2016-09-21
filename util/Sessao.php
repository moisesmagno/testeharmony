<?php
    class Sessao{
        
        /*public function __construct($iniciar = TRUE){
            if($iniciar == TRUE):
            $this->iniciarSessao();//Chama o método que inicía a sessão.
            endif;
        }*/
        
        //inicia a sessão.
        public function iniciarSessao(){
            session_start();
        }
        
        //Cria uma nova sessão.
        public function criaSessao($var, $conteudo){
            $_SESSION['S_'.$var] = $conteudo;
        }
        
        //Exclui um sessão.
        public function excluiSessao($var){
            unset($_SESSION['S_'.$var]);
        }
        
        //Verifica se existe uma determinada Sessão.
        public function getSession($var){
           return isset($_SESSION['S_'.$var]) ? TRUE : FALSE;
        }
        
        //Devolve uma sessão informado por parâmetro.
        public function devSession($var){
            return ($this->getSession($var)) ? $_SESSION['S_'.$var] : 'Vai dar Errado!'; 
        }
        
        //Esclui todas as sessões e todas as informações.
        public function destroiTodasSessoes($inicia = FALSE){
            session_unset();
            session_destroy();
            if($inicia == TRUE):
                $this->iniciasSessao();
            endif;
        }
        
        //Verifica se existem as sessões necessárias e obrigatórias para poder acessar a um página.
        public function sessoesNecessarias(){
            return ($this->getSession('email') && $this->getSession('senha') && $this->getSession('status')) ? TRUE : FALSE;
        }
    }
?>
