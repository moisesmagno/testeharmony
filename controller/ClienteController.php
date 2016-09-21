<?php
    class ClienteController{

        
        //Lista todos os clientes por estado.
        public function actionListarClientes($id){
            $cli = new ClienteModel();
            $cli->setarEstado($id);
            
            $cd = new ClienteDAO();
            return ($cont = $cd->buscarClientes($cli))? $cont : 'null';            
        }
        
        //lista todos os clientes Ativos.
        public function actionListarTodosClientesAtivos(){            
            $cd = new ClienteDAO();
            return ($cont = $cd->buscarTodosClientesAtivos())? $cont : 'null';            
        }
        
        //lista todos os clientes Inativos.
        public function actionListarTodosClientesInativos(){            
            $cd = new ClienteDAO();
            return ($cont = $cd->buscarTodosClientesInativos())? $cont : 'null';            
        }
        
        //Procura um determinado estado. 
        public function actionUmEstado($id){
            $cli = new ClienteModel();
            $cli->setarEstado($id);
            
            $cd = new ClienteDAO();
            return $cd->buscarUmEstado($cli);
        }
       
        //Enviar e-mail.
        public function actionEnviarEmail(){
            $email = new email();
            $dadosformulario = array(
                'nome' => strip_tags(utf8_decode($_POST['nome'])),
                'email' => strip_tags(utf8_decode($_POST['email'])),
                'uf' => strip_tags(utf8_decode($_POST['uf'])),
                'cidade' => strip_tags(utf8_decode($_POST['cidade'])),
                'telefone' => strip_tags(utf8_decode($_POST['telefone'])),
                'celular' => ($_POST['celular'] != '')? strip_tags(utf8_decode($_POST['celular'])) : '- -',
                'assunto' => strip_tags(utf8_decode($_POST['assunto'])),
                'descricao' => strip_tags(utf8_decode($_POST['descricao'])),
            );
            
            $email->enviaEmail($dadosformulario);
        }
        
        //Lista todos os clientes por estado.
        public function actionListarClientesInativos($id){
            $cli = new ClienteModel();
            $cli->setarEstado($id);
            
            $cd = new ClienteDAO();
            return ($cont = $cd->buscarClientesInativos($cli))? $cont : 'null';            
        }
        
        //Contato clientes ativos.
        public function actionCountCliAtivos(){            
            $cd = new ClienteDAO();
            return $cd->clientesAtivos();
        }
        
        //Conta clientes inativos.
        public function actionCountCliInativos(){
            $cd = new ClienteDAO();
            return $cd->clientesInativos();
        }
        
        //Adicionar novo cliente. 
        public function actionAddCliente(){
            
            if($_FILES['arquivo']['name'] != ''):
                //sobe o logotipo do cliente.
                $arquivo = array(
                        'nome' => $_FILES['arquivo']['name'],
                        'type' => $_FILES['arquivo']['type'],
                        'tmp_name' => $_FILES['arquivo']['tmp_name'],
                        'erro' => $_FILES['arquivo']['error'],
                        'tamanho_img' => $_FILES['arquivo']['size'],
                        'pasta' => 'view/img/logo_clientes'
                    );

                $up = new Upload();
                $resposta = $up->actionUpload($arquivo);
            else: 
                $resposta = 'avatar.jpg';
            endif;
           switch($resposta):
                case 'um':
                    //Não foi Possivel fazer Upload da Imagem!
                    $me->redireciona('Portfolio/Inserir&op=um');
                    break;
                case 'dois':
                    //Informa que o a extesão da img do usúario não corresponde aos já estabelicidos.
                    $me->redireciona('Portfolio/Inserir&op=dois');
                    break;
                case 'tres':
                    //Informa que o arquivo ultrapasa o limite do tamanho especificado.
                    $me->redireciona('Portfolio/Inserir&op=tres');
                    break;
                case 'cinco':
                    //Houve um erro na execução do upload da imagem.
                    $me->redireciona('Portfolio/Inserir&op=cinco');
                    break;
                default:
                    $dc = new ClienteModel();
                    $dc->setLogotipo($resposta);
                    $dc->setNome(trim(strip_tags(utf8_decode($_POST['nome']))));
                    $dc->setarTelefones((!empty($_POST['telefone']))? trim(strip_tags($_POST['telefone'])): NULL);
                    $dc->setEmail((!empty($_POST['email']))? trim(strip_tags(utf8_decode($_POST['email']))): NULL);
                    $dc->setSite((!empty($_POST['site']))? trim(strip_tags(utf8_decode($_POST['site']))): NULL);
                    $dc->setarEstado((!empty($_POST['uf']))? $_POST['uf']: NULL);
                    $dc->setCidade((!empty($_POST['cidade']))? trim(strip_tags(utf8_decode($_POST['cidade']))): NULL);
                    $dc->setBairro((!empty($_POST['bairro']))? trim(strip_tags(utf8_decode($_POST['bairro']))): NULL);
                    $dc->setEndereco((!empty($_POST['endereco']))? trim(strip_tags(utf8_decode($_POST['endereco']))): NULL);
                    $dc->setComplemento((!empty($_POST['complemento']))? trim(strip_tags(utf8_decode($_POST['complemento']))): NULL);
                    $dc->setCep((!empty($_POST['cep']))? strip_tags($_POST['cep']): NULL);
                    $dc->setDestaque($_POST['lc']);
                    $dc->setarDetalhes(
                            (!empty($_POST['wf']))? $_POST['wf']: 0,
                            (!empty($_POST['acdefi']))? $_POST['acdefi']: 0,
                            (!empty($_POST['estacionamento']))? $_POST['estacionamento']: 0,
                            (!empty($_POST['unidades']))? strip_tags(utf8_decode($_POST['unidades'])): NULL
                            );
                    $cd = new ClienteDAO();
                    
                    if($cd->actionNovoCliente($dc)):
                        echo '<script>alert("Cliente registrado com sucesso!"); location.href="'.URLPH.'/p/adm"</script>';
                    else:
                        echo '<script>alert("Ocorreu um erro ao tentar resgistrar este cliente. Por favor entrar em contato no E-mail: informatica.latam@labconous.com!"); location.href="'.URLPH.'/p/adm"</script>';
                    endif;
                    
                    break;
            endswitch;
        }
        
        //Procura todos os dados de um só cliente.
        public function actionDadosCliente($id){
            $cm = new ClienteModel();
            $cm->setId($id);
            
            $cd = new ClienteDAO();
            return $cd->dadosCliente($cm);
        }
        
        //Adiciona um novo logotipo. 
        public function actionAddLogo(){
                $arquivo = array(
                        'nome' => $_FILES['arquivo']['name'],
                        'type' => $_FILES['arquivo']['type'],
                        'tmp_name' => $_FILES['arquivo']['tmp_name'],
                        'erro' => $_FILES['arquivo']['error'],
                        'tamanho_img' => $_FILES['arquivo']['size'],
                        'pasta' => 'view/img/logo_clientes'
                );
                
                $up = new Upload();
                $resposta = $up->actionUpload($arquivo);
                
                switch ($resposta):
                    case "um":
                        echo 'aviso um';
                        break;
                    case "dois":
                        echo 'aviso dois';
                        break;
                    case "tres":
                        echo 'aviso tres';
                        break;
                    case "cinco":
                        echo 'aviso cinco';
                        break;
                    default:
                        $cm = new ClienteModel();
                        $cm->setId($_POST['idcli']);
                        $cm->setLogotipo($resposta);
                        
                        $cd = new ClienteDAO();
                        if($cd->addLogotipo($cm)):
                            echo '<script>alert("Logotipo alterado com sucesso!"); location.href="'.URLPH.'/p/editarcliente&id='.$_POST['idcli'].'"</script>';
                        else:
                            echo '<script>alert("Ocorreu um erro ao tentar alterar o logotipo :( Por favor entre em contato no e-mail: informatica.latam@labconous.com!!!"); location.href="'.URLPH.'/p/editarcliente&id='.$_POST['idcli'].'"</script>';
                        endif;
                endswitch;
        }
        
        //Esclui o logoipo e o substiue por um avatar. 
        public function actionExcluirLogo(){
            $cm = new ClienteModel();
            $cm->setId($_GET['idcli']);
            $cm->setLogotipo('avatar.jpg');
            
            $cd = new ClienteDAO();
            if($cd->excluirLogotipo($cm)):
                echo '<script>alert("Logotipo excluido com sucesso!"); location.href="'.URLPH.'/p/editarcliente&id='.$_GET['idcli'].'"</script>';
            else:
                echo '<script>alert("Ocorreu um erro ao tentar excluir o logotipo :( Por favor entre em contato no e-mail: informatica.latam@labconous.com!!!"); location.href="'.URLPH.'/p/editarcliente&id='.$_GET['idcli'].'"</script>';
            endif;
        }    
        
        //Atualizar dados do cliente. 
        public function actionEditarDados(){
            $dc = new ClienteModel();
            $dc->setId($_POST['idcli']);
            $dc->setNome(trim(strip_tags(utf8_decode($_POST['nome']))));
            $dc->setarTelefones((!empty($_POST['telefone']))? trim(strip_tags($_POST['telefone'])): NULL);
            $dc->setEmail((!empty($_POST['email']))? trim(strip_tags(utf8_decode($_POST['email']))): NULL);
            $dc->setSite((!empty($_POST['site']))? trim(strip_tags(utf8_decode($_POST['site']))): NULL);
            $dc->setarEstado((!empty($_POST['uf']))? $_POST['uf']: NULL);
            $dc->setCidade((!empty($_POST['cidade']))? trim(strip_tags(utf8_decode($_POST['cidade']))): NULL);
            $dc->setBairro((!empty($_POST['bairro']))? trim(strip_tags(utf8_decode($_POST['bairro']))): NULL);
            $dc->setEndereco((!empty($_POST['endereco']))? trim(strip_tags(utf8_decode($_POST['endereco']))): NULL);
            $dc->setComplemento((!empty($_POST['complemento']))? trim(strip_tags(utf8_decode($_POST['complemento']))): NULL);
            $dc->setCep((!empty($_POST['cep']))? strip_tags($_POST['cep']): NULL);
            $dc->setarDetalhes(
                    (!empty($_POST['wf']))? $_POST['wf']: 0,
                    (!empty($_POST['acdefi']))? $_POST['acdefi']: 0,
                    (!empty($_POST['estacionamento']))? $_POST['estacionamento']: 0,
                    (!empty($_POST['unidades']))? strip_tags(utf8_decode($_POST['unidades'])): NULL
                    );
            $dc->setDestaque($_POST['lc']);
            $dc->setStatus((!empty($_POST['status']))? $_POST['status']: 0);
            
            $cd = new ClienteDAO();
            if($cd->alterarDados($dc)):
                echo '<script>alert("Dados alterados com sucesso!!"); location.href="'.URLPH.'/p/editarcliente&id='.$_POST['idcli'].'"</script>';
            else:    
                echo '<script>alert("Erro no banco, entrar em contato no informatica.latam@labconous.com!!"); location.href="'.URLPH.'/p/editarcliente&id='.$_POST['idcli'].'"</script>';
            endif;
        }
        
        
        //Listar todos os clientes com logotipo.
        public function actionListarClientesLogotipos(){
            $cd = new ClienteDAO();
            return $cd->listarClientesLogotipos();
        }
        
    }
