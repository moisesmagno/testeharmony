<div class="env_tudo">

    <!-- ENVOLVE OS PERFILS -->
    <section class="row env_perfils_encontrados">
        <div class="principal">

            <?php             
                $post = (isset($_POST['uf']))? $_POST['uf']:'';
                $get = (isset($_GET['uf']))? $_GET['uf']: '';
                
                if($post == '' && $get == ''):
                    echo '<h1>Página não encontrada!</h1>';
                else:
                    $cc = new ClienteController();
                    
                    if($get != ''){
                        $lista_clientes = $cc->actionListarClientes($get);
                        $umestado = $cc->actionUmEstado($get);
                    }else{
                        $lista_clientes = $cc->actionListarClientes($post);
                        $umestado = $cc->actionUmEstado($post);
                    }
                    
            ?>
                <h1 class="tt_lista_perfils tt_lista_perfils_desktop">Resultado de busca no estado de <?php echo utf8_encode($umestado['uf_nome']); ?></h1>    
                <h1 class="tt_lista_perfils tt_lista_perfils_celular">Estado de <?php echo utf8_encode($umestado['uf_nome']); ?></h1>    
            <?php
                    if($lista_clientes == 'null'):
                        echo '<h1 class="uf_nao_encontrado">Não foram encontradas Clínicas nem Laboratórios neste estado :(</h1>';
                        echo '<h2 class="resultados_entreemcontato">Entre em contato com a gente e lhe orientaremos a clínica ou Laboratório, que ofereça o harmony mais perto da sua localidade :) <br><br> <a href="'.URLPH.'/p/contato">Clique Aqui</a></h2>';
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
                                            <?php if($key['cli_email'] != NULL): ?><div class="det_email"><img src="<?php echo URLPH.VWPH.IMGPH.DS;?>detalhes/email.png"><p><?php echo utf8_encode($key['cli_email']);?></p></div><?php else: endif;?>
                                            <?php if($key['cli_cidade'] != NULL): ?><div class="det_mapa"><img src="<?php echo URLPH.VWPH.IMGPH.DS;?>detalhes/mapa.png"><p><?php echo utf8_encode($key['cli_cidade']).' - '.$key['uf_sigla'];?></p></div><?php endif;?>
                                            <?php if($key['cli_endereco'] != NULL): ?><div class="det_endereco"><img src="<?php echo URLPH.VWPH.IMGPH.DS;?>detalhes/endereco.png"><p><?php echo utf8_encode($key['cli_endereco']); echo (!is_null($key['cli_complemento']))? ' - '.$key['cli_complemento'] : ''; ?></p></div><?php endif;?>
                                            <div class="det_bairrocep"><p><?php if(!is_null($key['cli_bairro'])): ?><span>Bairro: </span><?php echo utf8_encode($key['cli_bairro']);?> <?php endif; ?> <?php echo (!is_null($key['cli_cep']))? ' - ':''; if(!is_null($key['cli_cep'])): ?><span>CEP: </span><?php echo $key['cli_cep'];?></p><?php endif; ?></div>
                                        </div>
                                        <div class="detalhes2">
                                            <div class="nolocaltem">
                                                <?php if(($key['det_fiwi'] == 1) || ($key['det_acessodefic'] == 1) || ($key['det_estacionamento'] == 1)): ?><p>O local possui: </p><?php endif; ?>
                                                <div class="env_img_localtem">
                                                    <?php if($key['det_fiwi'] == 1): ?><img src="<?php echo URLPH.VWPH.IMGPH.DS;?>detalhes/wifi.png" title="Wifi"><?php endif; ?>
                                                    <?php if($key['det_acessodefic'] == 1): ?><img src="<?php echo URLPH.VWPH.IMGPH.DS;?>detalhes/deficiente.png" title="Acesso para deficientes"><?php endif; ?>
                                                    <?php if($key['det_estacionamento'] == 1): ?><img class="img_etacionamento" src="<?php echo URLPH.VWPH.IMGPH.DS;?>detalhes/estacionamento.png" title="Estacionamento"><?php endif; ?>
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
    
     <section class="row env_sejaparceiroresultados">
        <div class="principal">
            
            <h1 class="tt_parceiro_busca">Seja nosso parceiro</h1>
            
            <figure class="layout-5 env_img_parceria env_img_parceria_resultado">
                <img src="<?php echo URLPH.VWPH.IMGPH.DS;?>variados/parceria.png">
            </figure>
            <div class="layout-7 txt_parceria txt_parceria_resultado">
                <p class="p_sejaparceiro_resultados">
                    O TESTE HARMONY é um serviço que garante a mais alta qualidade e precisão, sendo oferecido pelo Labco Noûs Diagnoticos Especiais, uma empresa de muito prestigio e tradição. 
                    <br><br>
                    Por isso junte-se a nós e venha ser nosso parceiro!
                    <br>
                </p>
                <a class="a_sejaparceiro_resultados" href="<?php echo URLPH.DS.'p/contato'?>">Clique aqui!</a>
            </div>
        </div>
    </section>
    
    <?php require BSPH.VWPH.INCLUDEPH.DS.'footer.php'; ?>        
</div>
