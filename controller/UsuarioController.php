<?php

class UsuarioController{
    
    //Validar acesso
    public function actionValidarAcesso(){
        $uc = new UsuarioModel();
        $uc->setEmail(trim($_POST['email']));
        $uc->setSenha($_POST['senha']);
        
        $ud = new UsuarioDAO();
        $r = $ud->validausuario($uc);
        
       if($r['usu_email'] == $_POST['email'] && $r['usu_senha'] == $_POST['senha'] && $r['usu_status'] == 1):
            $ss = new Sessao();
            $ss->criaSessao('nome', $r['usu_nome']);
            $ss->criaSessao('email', $r['usu_email']);
            $ss->criaSessao('senha', $r['usu_senha']);
            $ss->criaSessao('status', $r['usu_status']);
            
            echo '<script>location.href="'.URLPH.'/p/adm"</script>';
        else:
            echo '<script>alert("Login ou senha incorretos!"); location.href="'.URLPH.'/p/login"</script>';
        endif;
    }
    
    //Sair da sessão.
    public function actionSair(){
        $ss = new Sessao();
        $ss->destroiTodasSessoes();
        
        echo '<script>location.href="'.URLPH.'/p/login"</script>';
    }
}