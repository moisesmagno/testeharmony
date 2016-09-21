<!-- BANNER DINÂMICO -->
 <section class="cont_banner img_banner_desktop">
     <div class="main">
         <ul id="cbp-bislideshow" class="cbp-bislideshow">
             <li><img src="http://testeharmony.com.br/view/img/banner/login_g.jpg" alt="image01"/></li>
         </ul>
     </div>
 </section>

 <section class="cont_banner img_banner_responsivo">
     <div class="main">
         <ul id="cbp-bislideshow1" class="cbp-bislideshow">
             <li><img src="http://testeharmony.com.br/view/img/banner/login_p.jpg" alt="image01"/></li>
         </ul>
     </div>
 </section><!-- FIM DO BANNER DINÂMICO -->    

 <!-- DIV QUE ENVOLVE TODO O SITE -->
 <div class="env_tudo_home">
    <figure class="env_logotipo_login">
       <img src="<?php echo URLPH.VWPH.DS; ?>img/variados/logotipo_nous_g.png">
       <p>Esta área é de uso exclusivo do Labco Noûs. </p>
    </figure> 
     <section class="env_form_login">
         <div class="form_login">
             <h3>Login</h3>
             <form name="form_loing" method="post" action="<?php echo URLPH.'/usuario/validaracesso' ?>">
                 <input type="email" name="email" placeholder="E-mail" required>
                 <input type="password" name="senha" placeholder="Senha" required>
                 <input type="submit" value="Acessar">                 
             </form>    
         </div>
     </section>
     <div class="empurra_form_login_baixo"></div>
 </div><!-- FIM DA DIV QUE ENVOLVE TODO O SITE -->    






