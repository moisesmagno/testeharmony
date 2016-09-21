<?php
class PController{
    
    //Chama a página Home.
    public function actionHome(){
        $ly = new Layout();
        $ly->montaview('home');
    }
    
    //Chama a página saibamais.
    public function actionSaibaMais(){
        $ly = new Layout();
        $ly->montaview('saibamais');
    }
    
    //Chama a página Clínicas.
    public function actionClinicas(){
        $ly = new Layout();
        $ly->montaview('clinicas');
    }
    
    //Chama a página de Resultado de clientes.
    public function actionResultadosBusca(){
        $ly = new Layout();
        $ly->montaview('resultados_busca');
    }
    
    //Chama a página Profissionais da saúde.
    public function actionProfissionaisSaude(){
        $ly = new Layout();
        $ly->montaview('profissionais_saude');
    }
    
    //Chama a página de contato. 
    public function actionContato(){
        $ly = new Layout();
        $ly->montaview('contato');
    }
    
    //Chama a página de login.
    public function actionLogin(){
        $ly = new Layout();
        
        $ss = new Sessao();
        if($ss->sessoesNecessarias()):
            $ly->montaview('adm');
        else:    
            $ly->montaview('login');
        endif;
    }
    
    //Chama a página administrativa.
    public function actionAdm(){
        $ly = new Layout();
        
        $ss = new Sessao();
        if($ss->sessoesNecessarias()):
            $ly->montaview('adm');
        else:
            echo '<script>alert("Por favor informar login e senha para poder acessar neste ambiente!"); location.href="'.URLPH.'/p/login"</script>';
        endif;
    }
    
    //Chama a página editar cliente.
    public function actionEditarCliente(){
        $ly = new Layout();
        
        $ss = new Sessao();
        if($ss->sessoesNecessarias()):
            $ly->montaview('editarcliente');
        else:
            echo '<script>alert("Por favor informar login e senha para poder acessar neste ambiente!"); location.href="'.URLPH.'/p/login"</script>';
        endif;
    }
    
    //Chama a página nonde lista todos os clientes ativos por estado. 
    public function actionClientesAtivos(){
        $ly = new Layout();
        
        $ss = new Sessao();
        if($ss->sessoesNecessarias()):
            $ly->montaview('clientes_ativos');
        else:
            echo '<script>alert("Por favor informar login e senha para poder acessar neste ambiente!"); location.href="'.URLPH.'/p/login"</script>';
        endif;
    }
    
    //Chama a página onde lista todos os cliente Ativos.
    public function actionTodosClientesAtivos(){
        $ly = new Layout();
        
        $ss = new Sessao();
        if($ss->sessoesNecessarias()){
            $ly->montaview('todos_clientes_ativos');
        }else{
            echo '<script>alert("Por favor informar login e senha para poder acessar neste ambiente!"); location.href="'.URLPH.'/p/login"</script>';
        }
    }
    
    //Chama a págin onde lista todos os clientes inativos por estado. 
    public function actionClientesInativos(){
        $ly = new Layout();
        
        $ss = new Sessao();
        if($ss->sessoesNecessarias()):
            $ly->montaview('clientes_inativos');
        else:
            echo '<script>alert("Por favor informar login e senha para poder acessar neste ambiente!"); location.href="'.URLPH.'/p/login"</script>';
        endif;
    }
    
    //Chama a página onde lista todos os cliente inativos.
    public function actionTodosClientesInativos(){
        $ly = new Layout();
        
        $ss = new Sessao();
        if($ss->sessoesNecessarias()){
            $ly->montaview('todos_clientes_inativos');
        }else{
            echo '<script>alert("Por favor informar login e senha para poder acessar neste ambiente!"); location.href="'.URLPH.'/p/login"</script>';
        }
    }
    
}
