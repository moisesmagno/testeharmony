<div class="env_tudo">

    <!-- ENVOLVE OS PERFILS -->
    <section class="row env_perfils_encontrados">
        <div class="principal">

            <?php             
                $post = (isset($_POST['uf']))? $_POST['uf']:'';
                
                if($post == ''):
                    echo '<h1>Página não encontrada!</h1>';
                else:
                    $cc = new ClienteController();

                    $lista_clientes = $cc->actionListarClientesInativos($post);
                    $umestado = $cc->actionUmEstado($post);
            ?>
                <h1 class="tt_lista_perfils tt_lista_perfils_desktop">Resultado de busca no estado de <?php echo utf8_encode($umestado['uf_nome']); ?></h1>    
                <h1 class="tt_lista_perfils tt_lista_perfils_celular">Estado de <?php echo utf8_encode($umestado['uf_nome']); ?></h1>    
            <?php
                    if($lista_clientes == 'null'):
                        echo '<h1 class="uf_nao_encontrado">Não foram encontrados clientes Inativos neste estado!</h1>';
                        //echo '<h2 class="resultados_entreemcontato">Entre em contato com a gente e lhe orientaremos a clínica ou Laboratório, que ofereça o harmony mais perto da sua localidade :) <br><br> <a href="'.URLPH.'/p/contato">Clique Aqui</a></h2>';
                    else:
                        foreach($lista_clientes as $key):
            ?>    
                            <!-- PERFIL -->
                            <article class="perfil_encontrado">
                                <div class="layout-5 env_logo_nome">
                                    <div class="img_nome">
                                        <div class="nome_cidade_perfil"><h1><?php echo utf8_encode($key['cli_cidade']).' - '.$key['uf_sigla'];?></h1></div>
                                        <p class="p_mobile"><?php echo utf8_encode($key['cli_nome']); ?></p>
                                        <img src="<?php echo URLPH.VWPH.IMGPH.DS.'logo_clientes/'.$key['cli_logotipo'];?>">
                                        <p class="p_desk"><?php echo utf8_encode($key['cli_nome']); ?></p>
                                    </div>
                                </div>    
                                <div class="layout-7 env_detalhes_geral">
                                    <div class="detalhes">
                                       <div class="detalhes1">
                                            <?php if($key['tel_fixo'] != NULL): ?><div class="det_telefone"><img src="<?php echo URLPH.VWPH.IMGPH.DS;?>detalhes/telefone.png"><p><?php echo $key['tel_fixo'];?></p></div><?php endif;?>
                                            <?php if($key['cli_site'] != NULL): ?><div class="det_site"><a href="<?php echo 'http://'.$key['cli_site']; ?>" target="_blank"><img src="<?php echo URLPH.VWPH.IMGPH.DS;?>detalhes/site.png"><p><?php echo $key['cli_site'];?></p></a></div><?php endif;?>
                                            <?php if($key['cli_email'] != NULL): ?><div class="det_email"><img src="<?php echo URLPH.VWPH.IMGPH.DS;?>detalhes/email.png"><p><?php echo utf8_encode($key['cli_email']);?></p></div><?php endif;?>
                                            <?php if($key['cli_cidade'] != NULL): ?><div class="det_mapa"><img src="<?php echo URLPH.VWPH.IMGPH.DS;?>detalhes/mapa.png"><p><?php echo utf8_encode($key['cli_cidade']).' - '.$key['uf_sigla'];?></p></div><?php endif;?>
                                            <?php if($key['cli_endereco'] != NULL): ?><div class="det_endereco"><img src="<?php echo URLPH.VWPH.IMGPH.DS;?>detalhes/endereco.png"><p><?php echo utf8_encode($key['cli_endereco']); echo (!is_null($key['cli_complemento']))? ' - '.$key['cli_complemento'] : ''; ?></p></div><?php endif;?>
                                            <div class="det_bairrocep"><p><?php if(!is_null($key['cli_bairro'])): ?><span>Bairro: </span><?php echo utf8_encode($key['cli_bairro']);?> <?php endif; ?> <?php echo (!is_null($key['cli_cep']))? ' - ':''; if(!is_null($key['cli_cep'])): ?><span>CEP: </span><?php echo $key['cli_cep'];?></p><?php endif; ?></div>
                                        </div>
                                        <div class="detalhes2">
                                            <div class="nolocaltem">
                                                <?php if(($key['det_fiwi'] == 1) && ($key['det_acessodefic'] == 1) && ($key['det_estacionamento'] == 1)): ?><p>O local possui: </p><?php endif; ?>
                                                <div class="env_img_localtem">
                                                    <?php if($key['det_fiwi'] == 1): ?><img src="<?php echo URLPH.VWPH.IMGPH.DS;?>detalhes/wifi.png" title="Wifi"><?php endif; ?>
                                                    <?php if($key['det_acessodefic'] == 1): ?><img src="<?php echo URLPH.VWPH.IMGPH.DS;?>detalhes/deficiente.png" title="Acesso para deficientes"><?php endif; ?>
                                                    <?php if($key['det_estacionamento'] == 1): ?><img class="img_etacionamento"  src="<?php echo URLPH.VWPH.IMGPH.DS;?>detalhes/estacionamento.png" title="Estacionamento"><?php endif; ?>
                                                </div>
                                                <?php if($key['det_outrasunidades'] != NULL): ?>
                                                <a href="<?php echo $key['det_outrasunidades'];?>" target="_blank" class="det2_unidades">Outras Unidades</a>
                                                <?php else:?>    
                                                    <p class="det2_unidades_unica">Unidade Única</p>
                                                <?php endif;?>
                                            </div>
                                        </div>     
                                     </div>  
                                </div>    
                                <a href="<?php echo URLPH.DS.'p/editarcliente&id='.$key['cli_id']; ?>"><p class="editar_cliente">Editar cliente</p></a>
                            </article><!-- FIM DO PERFIL -->
            <?php 
                        endforeach;
                    endif; 
                endif;
            ?>
                    
                <div class="empurra_perfils"></div>
            </div>    
        </div>
    </section><!-- FIM DA DIV QUE ENOLVE OS PERFILS -->
    
    <div class="layout-12 env_relatorio">
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
    
    <?php require BSPH.VWPH.INCLUDEPH.DS.'footer.php'; ?>        
</div>
