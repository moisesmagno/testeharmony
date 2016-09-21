<div class="env_tudo">
    <div class="principal">
        <h1 class="tt_area_admin">Área administrativa.</h1>
        
        <?php
            if(isset($_GET['id'])):
                $cc = new ClienteController();
                $ddcli = $cc->actionDadosCliente($_GET['id']);
                ?>
        
        <article class="row env_cadastro_relatorios">
            <div class="layout-7 env_cad_cli">
                <h1>Editar cliente - <a href="<?php echo URLPH.DS;?>p/adm">Novo cliente</a></h1>
                <figure class="logo_alterar">
                    <img src="<?php echo URLPH.VWPH.IMGPH.DS.'logo_clientes/'.$ddcli['cli_logotipo'];?>">
                </figure>
                <form name="form_logo" class="form_logo" method="post" action="<?php echo URLPH.DS.'cliente/addLogo'?>" enctype="multipart/form-data">
                    <span><input type="file" name="arquivo" required></span>
                    <input type="hidden" name="idcli" value="<?php echo $ddcli['cli_id']; ?>">
                    
                    <span class="span_bto_editarcli">
                        <a href="<?php echo URLPH.DS.'cliente/ExcluirLogo&idcli='.$ddcli['cli_id'];?>" class="excluirlogo">Excluir logotipo</a>
                        <input type="submit" value="Alterar logo">
                    </span>
                </form>
                <form name="form_cad_cli" class="form_cad_cli" method="post" action="<?php echo URLPH.DS.'cliente/editardados';?>">
                    <input type="hidden" name="idcli" value="<?php echo $ddcli['cli_id']; ?>">
                    <label>
                        Nome do cliente:
                        <input type="text" name="nome" value="<?php echo (empty($ddcli['cli_nome']) || $ddcli['cli_nome'] == NULL)? '':utf8_encode($ddcli['cli_nome']) ?>" required>
                    </label>
                    <label>
                        Telefone:
                        <input type="text" name="telefone" value="<?php echo (empty($ddcli['tel_fixo']) || $ddcli['tel_fixo'] == NULL)? '':utf8_encode($ddcli['tel_fixo'])?>" maxlength="14" onkeydown="Mascara(this,Telefone);" onkeypress="Mascara(this,Telefone);" onkeyup="Mascara(this,Telefone);" required >
                    </label>
                    <label>
                        Site:
                        <input type="text" name="site" placeholder="www." value="<?php echo (empty($ddcli['cli_site'])|| $ddcli['cli_site'] == NULL)? '':utf8_encode($ddcli['cli_site']) ?>">
                    </label>
                    <label>
                        E-mail:
                        <input type="email" name="email" value="<?php echo (empty($ddcli['cli_email']) || $ddcli['cli_email'] == NULL)? '': utf8_encode($ddcli['cli_email'])?>">
                    </label>
                    <label class="lb_estado">
                        Estado:
                        <select name="uf" required>
                            <option value=""></option>
                            <option <?php echo ($ddcli['cli_ufid'] == 1)? 'SELECTED': ''?> value="1">AC</option>
                            <option <?php echo ($ddcli['cli_ufid'] == 2)? 'SELECTED': ''?> value="2">AL</option>
                            <option <?php echo ($ddcli['cli_ufid'] == 3)? 'SELECTED': ''?> value="3">AP</option>
                            <option <?php echo ($ddcli['cli_ufid'] == 4)? 'SELECTED': ''?> value="4">AM</option>
                            <option <?php echo ($ddcli['cli_ufid'] == 5)? 'SELECTED': ''?> value="5">BA</option>
                            <option <?php echo ($ddcli['cli_ufid'] == 6)? 'SELECTED': ''?> value="6">CE</option>
                            <option <?php echo ($ddcli['cli_ufid'] == 7)? 'SELECTED': ''?> value="7">DP</option>
                            <option <?php echo ($ddcli['cli_ufid'] == 8)? 'SELECTED': ''?> value="8">ES</option>
                            <option <?php echo ($ddcli['cli_ufid'] == 9)? 'SELECTED': ''?> value="9">GO</option>
                            <option <?php echo ($ddcli['cli_ufid'] == 10)? 'SELECTED': ''?> value="10">MA</option>
                            <option <?php echo ($ddcli['cli_ufid'] == 11)? 'SELECTED': ''?> value="11">MT</option>
                            <option <?php echo ($ddcli['cli_ufid'] == 12)? 'SELECTED': ''?> value="12">MS</option>
                            <option <?php echo ($ddcli['cli_ufid'] == 13)? 'SELECTED': ''?> value="13">MG</option>
                            <option <?php echo ($ddcli['cli_ufid'] == 14)? 'SELECTED': ''?> value="14">PR</option>
                            <option <?php echo ($ddcli['cli_ufid'] == 15)? 'SELECTED': ''?> value="15">PB</option>
                            <option <?php echo ($ddcli['cli_ufid'] == 16)? 'SELECTED': ''?> value="16">PA</option>
                            <option <?php echo ($ddcli['cli_ufid'] == 17)? 'SELECTED': ''?> value="17">PE</option>
                            <option <?php echo ($ddcli['cli_ufid'] == 18)? 'SELECTED': ''?> value="18">PI</option>
                            <option <?php echo ($ddcli['cli_ufid'] == 19)? 'SELECTED': ''?> value="19">RJ</option>
                            <option <?php echo ($ddcli['cli_ufid'] == 20)? 'SELECTED': ''?> value="20">RN</option>
                            <option <?php echo ($ddcli['cli_ufid'] == 21)? 'SELECTED': ''?> value="21">RS</option>
                            <option <?php echo ($ddcli['cli_ufid'] == 22)? 'SELECTED': ''?> value="22">RO</option>
                            <option <?php echo ($ddcli['cli_ufid'] == 23)? 'SELECTED': ''?> value="23">RR</option>
                            <option <?php echo ($ddcli['cli_ufid'] == 24)? 'SELECTED': ''?> value="24">SC</option>
                            <option <?php echo ($ddcli['cli_ufid'] == 25)? 'SELECTED': ''?> value="25">SE</option>
                            <option <?php echo ($ddcli['cli_ufid'] == 26)? 'SELECTED': ''?> value=26">SP</option>
                            <option <?php echo ($ddcli['cli_ufid'] == 27)? 'SELECTED': ''?> value="27">TO</option>
                        </select>
                    </label>
                    <label class="lb_cidade">
                        Cidade:
                        <input type="text" name="cidade" value="<?php echo (empty($ddcli['cli_cidade']) || $ddcli['cli_cidade'] == NULL)? '':utf8_encode($ddcli['cli_cidade'])?>" required >
                    </label>
                    <label>
                        Bairro:
                        <input type="text" name="bairro" value="<?php echo (empty($ddcli['cli_bairro']) || $ddcli['cli_bairro'] == NULL)? '':utf8_encode($ddcli['cli_bairro'])?>" required >
                    </label>
                    <label>
                        Endereço:
                        <input type="text" name="endereco" value="<?php echo (empty($ddcli['cli_endereco']) || $ddcli['cli_endereco'] == NULL)? '':utf8_encode($ddcli['cli_endereco'])?>" required >
                    </label>
                    <label class="lb_complemento">
                        Complemento:
                        <input type="text" name="complemento" value="<?php echo (empty($ddcli['cli_complemento']) || $ddcli['cli_complemento'] == NULL)? '':utf8_encode($ddcli['cli_complemento'])?>">
                    </label>  
                    <label class="lb_cep">
                        CEP:
                        <input type="text" name="cep" value="<?php echo (empty($ddcli['cli_cep']) || $ddcli['cli_cep'] == NULL)? '':utf8_encode($ddcli['cli_cep'])?>" maxlength="9" onkeydown="Mascara(this,Cep);" onkeypress="Mascara(this,Cep);">
                    </label>
                    <label>
                        Unidades:
                        <input type="text" placeholder="http://" name="unidades" value="<?php echo (empty($ddcli['det_outrasunidades']) || $ddcli['det_outrasunidades'] == NULL)? '':utf8_encode($ddcli['det_outrasunidades'])?>">
                    </label>
                    <label class="lb_wifi">
                        Wifi:
                        <select name="wf" required>
                            <option> </option>
                            <option <?php echo ($ddcli['det_fiwi'] == 1)? 'SELECTED': ''?> value="1"> Sim </option>
                            <option <?php echo ($ddcli['det_fiwi'] == 0)? 'SELECTED': ''?> value="0"> Não </option>
                        </select>
                    </label>
                    <label class="acesdef">
                        Aces. Deficiente:
                        <select name="acdefi" required>
                            <option> </option>
                            <option <?php echo ($ddcli['det_acessodefic'] == 1)? 'SELECTED': ''?> value="1"> Sim </option>
                            <option <?php echo ($ddcli['det_acessodefic'] == 0)? 'SELECTED': ''?> value="0"> Não </option>
                        </select>
                    </label>
                    <label class="estacionamento">
                        Estacionamento:
                        <select name="estacionamento" required>
                            <option> </option>
                            <option <?php echo ($ddcli['det_estacionamento'] == 1)? 'SELECTED': ''?> value="1"> Sim </option>
                            <option <?php echo ($ddcli['det_estacionamento'] == 0)? 'SELECTED': ''?> value="0"> Não </option>
                        </select>
                    </label>
                    <label>
                        Status:
                        <select name="status" required>
                            <option> </option>9
                            <option <?php echo ($ddcli['cli_status'] == 1)? 'SELECTED': ''?> value="1"> Ativo </option>
                            <option <?php echo ($ddcli['cli_status'] == 0)? 'SELECTED': ''?> value="0"> Inativo </option>
                        </select>
                    </label>
                    <label class="lc">
                        Destacar cliente:
                        <select name="lc" required>
                            <option> </option>
                            <option <?php echo ($ddcli['cli_destaque'] == 1)? 'SELECTED': ''?> value="1"> Sim </option>
                            <option <?php echo ($ddcli['cli_destaque'] == 0)? 'SELECTED': ''?> value="0"> Não </option>
                        </select>
                    </label>
                    <span class="av_lc_logo_cli"> 
                        <?php echo ($ddcli['cli_destaque'] == 1)? 'O logo deste cliente ESTÁ na lista de Destaque!': 'O logo deste clientes NÃO está na lista de Destaque!'?>
                    </span>
                    <input type="submit" value="Alterar dados">
                 </form>
            </div>
                    
        <?php endif;?>
            
            <div class="layout-5 env_relatorio">
                <div class="ativos">
                    <h3 class="tt_cli_ativos">Listar clientes ativos por estado!</h3>
                    <form name="form_listar_cli" class="form_listar_cli" method="post" action="<?php echo URLPH.'/p/clientesativos'; ?>">
                        <select name="uf" required="Selecione o estado">
                            <option value="">Selecione o estado</option>
                            <option value="1">AC</option>
                            <option value="2">AL</option>
                            <option value="3">AP</option>
                            <option value="4">AM</option>
                            <option value="5">BA</option>
                            <option value="6">CE</option>
                            <option value="7">DP</option>
                            <option value="8">ES</option>
                            <option value="9">GO</option>
                            <option value="10">MA</option>
                            <option value="11">MT</option>
                            <option value="12">MS</option>
                            <option value="13">MG</option>
                            <option value="14">PR</option>
                            <option value="15">PB</option>
                            <option value="16">PA</option>
                            <option value="17">PE</option>
                            <option value="18">PI</option>
                            <option value="19">RJ</option>
                            <option value="20">RN</option>
                            <option value="21">RS</option>
                            <option value="22">RO</option>
                            <option value="23">RR</option>
                            <option value="24">SC</option>
                            <option value="25">SE</option>
                            <option value=26">SP</option>
                            <option value="27">TO</option>
                        </select>
                        <input type="submit" class="btn_lista_ativos" value="Buscar">
                    </form> 
                    
                    <a href="<?php echo URLPH.'/p/todosclientesativos'; ?>" class="ls_todos_cli_ativos" >Listar todos os clientes ativos</a>
                    
                     <?php 
                        $cc = new ClienteController();
                        $qtdeativos = $cc->actionCountCliAtivos();
                    ?>
                    
                    <p class="total_clientes"><strong>Total:</strong> <?php echo $qtdeativos['qtde'];?></p>
                </div>
                
                <div class="inativos">
                    <h3 class="tt_cli_inativos">Listar clientes inativos por estado!</h3>
                    <form name="form_listar_cli" class="form_listar_cli" method="post" action="<?php echo URLPH.'/p/clientesinativos'; ?>">
                        <select name="uf" required="Selecione o estado">
                            <option value="">Selecione o estado</option>
                            <option value="1">AC</option>
                            <option value="2">AL</option>
                            <option value="3">AP</option>
                            <option value="4">AM</option>
                            <option value="5">BA</option>
                            <option value="6">CE</option>
                            <option value="7">DP</option>
                            <option value="8">ES</option>
                            <option value="9">GO</option>
                            <option value="10">MA</option>
                            <option value="11">MT</option>
                            <option value="12">MS</option>
                            <option value="13">MG</option>
                            <option value="14">PR</option>
                            <option value="15">PB</option>
                            <option value="16">PA</option>
                            <option value="17">PE</option>
                            <option value="18">PI</option>
                            <option value="19">RJ</option>
                            <option value="20">RN</option>
                            <option value="21">RS</option>
                            <option value="22">RO</option>
                            <option value="23">RR</option>
                            <option value="24">SC</option>
                            <option value="25">SE</option>
                            <option value=26">SP</option>
                            <option value="27">TO</option>
                        </select>
                        <input type="submit" class="btn_lista_inativos" value="Buscar">
                    </form>
                    
                    <a href="<?php echo URLPH.'/p/todosclientesinativos'; ?>" class="ls_todos_cli_inativos">Listar todos os clientes inativos</a>
                    
                    <?php 
                        $cc = new ClienteController();
                        $qtdeinativos = $cc->actionCountCliInativos();
                    ?>
                    
                    <p class="total_clientes"><strong>Total:</strong> <?php echo $qtdeinativos['qtde'];?></p>
                </div>
            </div>
        </article>  
    </div>
    
    <?php require BSPH.VWPH.INCLUDEPH.DS.'footer.php'; ?>  
</div>