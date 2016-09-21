<?php
    class ClienteDAO{
        
        public function buscarClientes($id){
            $sql = 'SELECT 
                    cli_id,
                    cli_nome,
                    cli_email,
                    cli_site,
                    cli_ufid,
                    cli_cidade,
                    cli_endereco,
                    cli_complemento,
                    cli_bairro,
                    cli_cep,
                    cli_logotipo,
                    det_fiwi,
                    det_acessodefic,
                    det_estacionamento,
                    det_outrasunidades,
                    uf_nome,
                    uf_sigla,
                    tel_fixo,
                    tel_celular,
                    tel_fax
                    FROM `tb_cliente` 
                            inner join tb_detalhes on det_cliid = cli_id
                            inner join tb_estados on uf_id = cli_ufid 
                            inner join tb_telefones on tel_cliid = cli_id
                            WHERE cli_status = 1 AND cli_ufid = :id_uf
                            ORDER BY cli_cidade ASC';
            
            $stmt = BD::conn()->prepare($sql);
            $stmt->bindValue(':id_uf', $id->getEstado()->getIdUf(), PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        
        public function buscarUmEstado($id){
            $sql = 'SELECT * FROM tb_estados WHERE uf_id = :idfu';
            
            $stmt = BD::conn()->prepare($sql);
            $stmt->bindValue(':idfu', $id->getEstado()->getIdUf(), PDO::PARAM_INT);
            $stmt->execute();
            
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        
        //Lista cliente inativos
        public function buscarClientesInativos($id){
            $sql = 'SELECT 
                    cli_id,
                    cli_nome,
                    cli_email,
                    cli_site,
                    cli_ufid,
                    cli_cidade,
                    cli_endereco,
                    cli_complemento,
                    cli_bairro,
                    cli_cep,
                    cli_logotipo,
                    det_fiwi,
                    det_acessodefic,
                    det_estacionamento,
                    det_outrasunidades,
                    uf_nome,
                    uf_sigla,
                    tel_fixo,
                    tel_celular,
                    tel_fax
                    FROM `tb_cliente` 
                            inner join tb_detalhes on det_cliid = cli_id
                            inner join tb_estados on uf_id = cli_ufid 
                            inner join tb_telefones on tel_cliid = cli_id
                            WHERE cli_status = 0 AND cli_ufid = :id_uf
                            ORDER BY cli_cidade ASC';
            
            $stmt = BD::conn()->prepare($sql);
            $stmt->bindValue(':id_uf', $id->getEstado()->getIdUf(), PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        
        
        //Busca todos os clientes ativos. 
        public function buscarTodosClientesAtivos(){
            $sql = 'SELECT 
                    cli_id,
                    cli_nome,
                    cli_email,
                    cli_site,
                    cli_ufid,
                    cli_cidade,
                    cli_endereco,
                    cli_complemento,
                    cli_bairro,
                    cli_cep,
                    cli_logotipo,
                    det_fiwi,
                    det_acessodefic,
                    det_estacionamento,
                    det_outrasunidades,
                    uf_nome,
                    uf_sigla,
                    tel_fixo,
                    tel_celular,
                    tel_fax
                    FROM `tb_cliente` 
                            inner join tb_detalhes on det_cliid = cli_id
                            inner join tb_estados on uf_id = cli_ufid 
                            inner join tb_telefones on tel_cliid = cli_id
                            WHERE cli_status = 1
                            ORDER BY cli_cidade ASC';
            
            $stmt = BD::conn()->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        
        
        //Busca todos os clientes inativos. 
        public function buscarTodosClientesInativos(){
            $sql = 'SELECT 
                    cli_id,
                    cli_nome,
                    cli_email,
                    cli_site,
                    cli_ufid,
                    cli_cidade,
                    cli_endereco,
                    cli_complemento,
                    cli_bairro,
                    cli_cep,
                    cli_logotipo,
                    det_fiwi,
                    det_acessodefic,
                    det_estacionamento,
                    det_outrasunidades,
                    uf_nome,
                    uf_sigla,
                    tel_fixo,
                    tel_celular,
                    tel_fax
                    FROM `tb_cliente` 
                            inner join tb_detalhes on det_cliid = cli_id
                            inner join tb_estados on uf_id = cli_ufid 
                            inner join tb_telefones on tel_cliid = cli_id
                            WHERE cli_status = 0
                            ORDER BY cli_cidade ASC';
            
            $stmt = BD::conn()->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        
        //Gravando os dados do cliente.
        public function actionNovoCliente($obj){
            //Adiciona a tabela cliente
            try {
                BD::conn()->beginTransaction();
                $sql = 'INSERT INTO
                        tb_cliente(cli_nome, cli_email, cli_site, cli_ufid, cli_cidade, cli_endereco, cli_complemento, cli_bairro, cli_cep, cli_logotipo, cli_destaque, cli_status) 
                        VALUES (:nome,:email,:site,:ufid,:cidade,:endereco,:complemento,:bairro,:cep,:logotipo,:destaque, :status)';
                $stmt = BD::conn()->prepare($sql);
                $stmt->bindValue(':nome', $obj->getNome(), PDO::PARAM_STR);
                $stmt->bindValue(':email', $obj->getEmail(), PDO::PARAM_STR);
                $stmt->bindValue(':site', $obj->getSite(), PDO::PARAM_STR);
                $stmt->bindValue(':ufid', $obj->getEstado()->getIdUf(), PDO::PARAM_INT);
                $stmt->bindValue(':cidade', $obj->getCidade(),PDO::PARAM_STR);
                $stmt->bindValue(':endereco', $obj->getEndereco(),PDO::PARAM_STR);
                $stmt->bindValue(':complemento', $obj->getComplemento(), PDO::PARAM_STR);
                $stmt->bindValue(':bairro', $obj->getBairro(), PDO::PARAM_STR);
                $stmt->bindValue(':cep', $obj->getCep(), PDO::PARAM_STR);
                $stmt->bindValue(':logotipo', $obj->getLogotipo(), PDO::PARAM_STR);
                $stmt->bindValue(':destaque', $obj->getDestaque(), PDO::PARAM_INT);
                $stmt->bindValue(':status', 1, PDO::PARAM_INT);
                BD::conn()->commit();
                $stmt->execute();
                $id_cli = BD::conn()->lastInsertId();//PEGA O ID DO ÚLTIMO REGISTRO NO BANCO.
            } catch (Exception $ex) {
                BD::conn()->rollback();
                print "Erro!: ".$e->getMessage()."<br>";
            }
            
            //Adiciona a table detalhes.
            try {
                BD::conn()->beginTransaction();
                $sql = 'INSERT INTO
                        tb_detalhes(det_cliid, det_fiwi, det_acessodefic, det_estacionamento, det_outrasunidades) 
                        VALUES (:idcli, :wifi, :acesso, :estacionamento, :unidades)';
                $stmt = BD::conn()->prepare($sql);
                $stmt->bindParam(':idcli', $id_cli, PDO::PARAM_INT);
                $stmt->bindValue(':wifi', $obj->getDetalhes()->getFiwi(), PDO::PARAM_INT);
                $stmt->bindValue(':acesso', $obj->getDetalhes()->getAcessoDefic(), PDO::PARAM_INT);
                $stmt->bindValue(':estacionamento', $obj->getDetalhes()->getEstacionamento(), PDO::PARAM_INT);
                $stmt->bindValue(':unidades', $obj->getDetalhes()->getOutrasUnidades(),PDO::PARAM_STR);
                BD::conn()->commit();
                $stmt->execute();
            } catch (Exception $ex) {
                BD::conn()->rollback();
                print "Erro!: ".$e->getMessage()."<br>";
            }
            
            //Adiciona a table contato.
            try {
                BD::conn()->beginTransaction();
                $sql = 'INSERT INTO
                        tb_telefones(tel_cliid, tel_fixo) 
                        VALUES (:idclitel, :fixo)';
                $stmt = BD::conn()->prepare($sql);
                $stmt->bindParam(':idclitel', $id_cli, PDO::PARAM_INT);
                $stmt->bindValue(':fixo', $obj->getTelefones()->getFixo(), PDO::PARAM_INT);
                BD::conn()->commit();
                $stmt->execute();
            } catch (Exception $ex) {
                BD::conn()->rollback();
                print "Erro!: ".$e->getMessage()."<br>";
            }
            
            return TRUE;
            
        }
        
        //Devolve quantidade de clientes ativos. 
        public function clientesAtivos(){
            $sql = 'SELECT count(*) as qtde FROM `tb_cliente` WHERE cli_status = :status';
            
            $stmt = BD::conn()->prepare($sql);
            $stmt->bindValue(':status', 1, PDO::PARAM_INT);
            $stmt->execute();
            
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        
        
        //Devolve quantidade de clientes inativos. 
        public function clientesInativos(){
            $sql = 'SELECT count(*) as qtde FROM `tb_cliente` WHERE cli_status = :status';
            
            $stmt = BD::conn()->prepare($sql);
            $stmt->bindValue(':status', 0, PDO::PARAM_INT);
            $stmt->execute();
            
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        
        //Buscar dados de um cliente só.
        public function dadosCliente($obj){
            $sql = 'SELECT 
                    cli_id,
                    cli_nome,
                    cli_email,
                    cli_site,
                    cli_ufid,
                    cli_cidade,
                    cli_endereco,
                    cli_complemento,
                    cli_bairro,
                    cli_cep,
                    cli_logotipo,
                    cli_destaque,
                    cli_status,
                    det_fiwi,
                    det_acessodefic,
                    det_estacionamento,
                    det_outrasunidades,
                    uf_nome,
                    uf_sigla,
                    tel_fixo,
                    tel_celular,
                    tel_fax
                    FROM `tb_cliente` 
                            inner join tb_detalhes on det_cliid = cli_id
                            inner join tb_estados on uf_id = cli_ufid 
                            inner join tb_telefones on tel_cliid = cli_id
                            WHERE cli_id = :id
                            ORDER BY cli_cidade ASC';
            
            $stmt = BD::conn()->prepare($sql);
            $stmt->bindValue(':id', $obj->getId(), PDO::PARAM_INT);
            $stmt->execute();
            
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        
        //Gravar o logotipo do cliente no banco. 
        public function addLogotipo($obj){
            $sql = 'UPDATE `tb_cliente`
                    SET cli_logotipo = :logo
                    WHERE cli_id = :idcli';
            $stmt = BD::conn()->prepare($sql);
            $stmt->bindValue(':logo', $obj->getLogotipo(), PDO::PARAM_STR);
            $stmt->bindValue(':idcli', $obj->getId(), PDO::PARAM_INT);
            $stmt->execute();
            
            return ($stmt->execute()) ? TRUE : FALSE;
        }
        
        public function excluirLogotipo($obj){
            $sql = 'UPDATE `tb_cliente`
                    SET cli_logotipo = :logo
                    WHERE cli_id = :idcli';
            $stmt = BD::conn()->prepare($sql);
            $stmt->bindValue(':logo', $obj->getLogotipo(), PDO::PARAM_STR);
            $stmt->bindValue(':idcli', $obj->getId(), PDO::PARAM_INT);
            $stmt->execute();
            return ($stmt->execute()) ? TRUE : FALSE;
        }
        
        //Alterar dados do cliente.
        public function alterarDados($obj){
            
            //registra dados gerais.
            $sql1 = 'UPDATE `tb_cliente` 
                    SET 
                        cli_nome = :nome, 
                        cli_email = :email, 
                        cli_site = :site, 
                        cli_ufid = :uf,
                        cli_cidade = :cidade,
                        cli_endereco = :endereco,
                        cli_complemento = :complemento,
                        cli_bairro = :bairro,
                        cli_cep = :cep,
                        cli_destaque = :destaque,
                        cli_status = :status 
                     WHERE cli_id = :idcli   
                     ';
            $stmt = BD::conn()->prepare($sql1);
            $stmt->bindValue(':nome', $obj->getNome(), PDO::PARAM_STR);
            $stmt->bindValue(':email', $obj->getEmail(), PDO::PARAM_STR);
            $stmt->bindValue(':site', $obj->getSite(), PDO::PARAM_STR);
            $stmt->bindValue(':uf', $obj->getEstado()->getIdUf(), PDO::PARAM_INT);
            $stmt->bindValue(':cidade', $obj->getCidade(), PDO::PARAM_STR);
            $stmt->bindValue(':endereco', $obj->getEndereco(), PDO::PARAM_STR);
            $stmt->bindValue(':complemento', $obj->getComplemento(), PDO::PARAM_STR);
            $stmt->bindValue(':bairro', $obj->getBairro(), PDO::PARAM_STR);
            $stmt->bindValue(':cep', $obj->getCep(), PDO::PARAM_STR);
            $stmt->bindValue(':destaque', $obj->getDestaque(), PDO::PARAM_INT);
            $stmt->bindValue(':status', $obj->getStatus(), PDO::PARAM_INT);  
            $stmt->bindValue(':idcli', $obj->getId(), PDO::PARAM_INT);  
            $valor1 = ($stmt->execute()) ? 1 : 0;
            
            //alterando os dados dos detalhes. 
            $sql2 = 'UPDATE `tb_detalhes` 
                    SET 
                        det_fiwi = :wifi, 
                        det_acessodefic = :acesdefic, 
                        det_estacionamento = :estacionamento,
                        det_outrasunidades = :unidades                        
                     WHERE det_cliid = :idcli   
                     ';
            $stmt = BD::conn()->prepare($sql2);
            $stmt->bindValue(':wifi', $obj->getDetalhes()->getFiwi(), PDO::PARAM_INT);
            $stmt->bindValue(':acesdefic', $obj->getDetalhes()->getAcessoDefic(), PDO::PARAM_INT);
            $stmt->bindValue(':estacionamento', $obj->getDetalhes()->getEstacionamento(), PDO::PARAM_INT);
            $stmt->bindValue(':unidades', $obj->getDetalhes()->getOutrasUnidades(), PDO::PARAM_STR);
            $stmt->bindValue(':idcli', $obj->getId(), PDO::PARAM_INT);  
            $valor2 = ($stmt->execute()) ? 1 : 0;
            
            //alterando os dados dos Telefone. 
            $sql3 = 'UPDATE `tb_telefones` 
                    SET tel_fixo = :fixo 
                    WHERE tel_cliid = :idcli    
                     ';
            $stmt = BD::conn()->prepare($sql3);
            $stmt->bindValue(':fixo', $obj->getTelefones()->getFixo(), PDO::PARAM_STR);
            $stmt->bindValue(':idcli', $obj->getId(), PDO::PARAM_INT);
            $valor3 = ($stmt->execute()) ? 1 : 0;
            
            $soma = $valor1 + $valor2 + $valor3;
            return ($soma == 3) ? TRUE : FALSE;
        }
        
        public function listarClientesLogotipos(){
            $sql = 'SELECT cli_site, cli_logotipo
                    FROM `tb_cliente`
                    WHERE cli_status = :status AND cli_destaque = :destaque AND cli_logotipo <> :logoevitar';
            
            $stmt = BD::conn()->prepare($sql);
            $stmt->bindValue(':status', 1, PDO::PARAM_INT);
            $stmt->bindValue(':destaque', 1, PDO::PARAM_INT);
            $stmt->bindValue(':logoevitar', 'avatar.jpg', PDO::PARAM_STR);
            $stmt->execute();
            
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        
    }
