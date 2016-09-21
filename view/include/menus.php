<?php 
    $ss = new Sessao();
?>


<!-- BARRA DE MENUS -->
<header class="row env_barra_menu menu_desktop">
    <div class="layout-2">
        <a href="<?php echo URLPH.DS;?>"><figure class="logo_barra_menu"><img src="<?php echo URLPH.VWPH.IMGPH.DS;?>variados/logo_harmony.png" alt="Logotipo do Harmony"></figure></a>
    </div>
    <div class="layout-10">
        <nav class="links_menus">
            <ul>
                <?php
                    if($ss->sessoesNecessarias()):
                ?>        
                        <li><a href="<?php echo URLPH.DS;?>usuario/sair" class="link_login">Sair</a></li>  
                        <li><a href="<?php echo URLPH.DS;?>p/adm">ADM</a></li>
                <?php
                    else:
                ?>        
                        <li><a href="<?php echo URLPH.DS;?>p/login" class="link_login">Login</a></li>                                              
                <?php
                    endif;
                ?>
                        
                <li><a href="<?php echo URLPH.DS;?>p/profissionaissaude">Para profissionais da Saúde</a></li>
                <li><a href="<?php echo URLPH.DS;?>p/clinicas">Clínicas/Laboratórios</a></li>
                <li><a href="http://teste-harmony.blogspot.com.br/">News</a></li>
                <li><a href="<?php echo URLPH.DS;?>p/saibamais">Saiba Mais</a></li>
                <li><a href="<?php echo URLPH.DS;?>/">Home</a></li>
            </ul>    
        </nav>   
    </div>    
</header><!-- FIM DA BARRA DE MENUS   -->

<!-- BARRA DE MENUS RESPONSIVO -->
<header class="row env_barra_menu menu_responsivo">
    <figure class="layout-6 logo_menu_responsivo">
        <a href="<?php echo URLPH.DS;?>"><img src="<?php echo URLPH.VWPH.IMGPH.DS;?>variados/logo_harmony.png" alt="Logotipo do Harmony"></a>
    </figure>
    <figure class="layout-6 icone_menu_responsivo">
        <img id="mostrar" class="bt_mostrar" src="<?php echo URLPH.VWPH.IMGPH.DS;?>variados/menu_responsivo.png" alt="Ícone de menu">
        <img id="ocultar" class="bt_ocultar" src="<?php echo URLPH.VWPH.IMGPH.DS;?>variados/menu_responsivo.png" alt="Ícone de menu">
    </figure>
    <nav id="capaefectos" class="links_menu_mobile">
        <ul>
            <a href="<?php echo URLPH.DS;?>/"><li>Home</li></a>
            <a href="http://teste-harmony.blogspot.com.br/"><li>News</li></a>
            <a href="<?php echo URLPH.DS;?>p/saibamais"><li>Saiba Mais</li></a>
            <a href="<?php echo URLPH.DS;?>p/clinicas"><li>Laboratórios/Clínicas</li></a>
            <a href="<?php echo URLPH.DS;?>p/profissionaissaude"><li>Para profissionais da saúde</li></a>
            
            <?php
                if($ss->sessoesNecessarias()):
            ?>        
                    <a href="<?php echo URLPH.DS;?>p/adm"><li>ADM</li></a>
                    <a href="<?php echo URLPH.DS;?>usuario/sair"><li><span>Sair do sistema</span></li></a>
            <?php
                else:
            ?>        
                    <a href="<?php echo URLPH.DS;?>p/login"><li><span>Logar no sistema</span></li></a>
            <?php
                endif;
            ?>
            
        </ul>
    </nav>    
</header><!-- FIM DA BARRA DE MENUS RESPONSIVO --> 


