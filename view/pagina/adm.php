<div class="env_tudo">
    <div class="principal">
        <h1 class="tt_area_admin">Área administrativa.</h1>
        <article class="row env_cadastro_relatorios">
            <div class="layout-7 env_cad_cli">
                <h1>Novo cliente</h1>
                <form name="form_cad_cli" class="form_cad_cli" method="post" action="<?php echo URLPH.DS;?>cliente/addcliente" enctype="multipart/form-data">
                    <label>
                        <input type="file" name="arquivo" title="pasta">
                    </label>
                    <label>
                        Nome do cliente:
                        <input type="text" name="nome" required>
                    </label>
                    <label>
                        Telefone:
                        <input type="text" name="telefone" maxlength="14" onkeydown="Mascara(this,Telefone);" onkeypress="Mascara(this,Telefone);" onkeyup="Mascara(this,Telefone);" required>
                    </label>
                    <label>
                        Site:
                        <input type="text" name="site" placeholder="www.">
                    </label>
                    <label>
                        E-mail:
                        <input type="email" name="email">
                    </label>
                    <label class="lb_estado">
                        Estado:
                        <select class="select_adm" name="uf" required>
                            <option value=""></option>
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
                            <option value="26">SP</option>
                            <option value="27">TO</option>
                        </select>
                    </label>
                    <label class="lb_cidade">
                        Cidade:
                        <input type="text" name="cidade" required>
                    </label>
                    <label>
                        Bairro:
                        <input type="text" name="bairro" required>
                    </label>                    
                    <label>
                        Endereço:
                        <input type="text" name="endereco" required>
                    </label>
                    <label class="lb_complemento">
                        Complemento:
                        <input type="text" name="complemento">
                    </label>                    
                    <label class="lb_cep">
                        CEP:
                        <input type="text" name="cep" maxlength="9" onkeydown="Mascara(this,Cep);" onkeypress="Mascara(this,Cep);">
                    </label>
                    <label>
                        Unidades:
                        <input type="text" name="unidades" placeholder="http://">
                    </label>
                    <label class="lb_wifi">
                        Wifi:
                        <select name="wf" required>
                            <option> </option>
                            <option value="1"> Sim </option>
                            <option value="0"> Não </option>
                        </select>
                    </label>
                    <label class="acesdef">
                        Aces. Deficiente:
                        <select name="acdefi" required>
                            <option> </option>
                            <option value="1"> Sim </option>
                            <option value="0"> Não </option>
                        </select>
                    </label>
                    <label class="estacionamento">
                        Estacionamento:
                        <select name="estacionamento" required>
                            <option> </option>
                            <option value="1"> Sim </option>
                            <option value="0"> Não </option>
                        </select>
                    </label>
                    <label class="lc">
                        Destacar cliente:
                        <select name="lc" required>
                            <option> </option>
                            <option value="1"> Sim </option>
                            <option value="0"> Não </option>
                        </select>
                    </label>
                    <span class="av_lc_logo_cli"> Verificar se o logo deste cliente já se está na lista de destaque!</span>
                    <input type="submit" value="Registrar">
                 </form>
            </div>
            <div class="layout-5 env_relatorio">
                <div class="ativos">
                    <h3 class="tt_cli_ativos">Listar clientes ativos por estado!</h3>
                    <form name="form_listar_cli" class="form_listar_cli" method="post" action="<?php echo URLPH.'/p/clientesativos'; ?>">
                        <select class="select_adm" name="uf" required="Selecione o estado">
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
                        <select class="select_adm" name="uf" required="Selecione o estado">
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