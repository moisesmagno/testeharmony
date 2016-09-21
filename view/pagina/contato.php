<div class="row env_tudo">
        <figure class="env_logotipo">
            <img src="<?php echo URLPH.VWPH.DS; ?>img/variados/logotipo_nous_g.png">
        </figure>
        
        <p class="txt_apresentacao_contato">
            Nesta página você pode, nos consultar, tirar suas duvidas, fazer comentários, solicitar um visita, como desejar. Responderemos 
            o mais rápido possível!
        </p>
        <section class="env_formulario">
             <h1 class="tt_cont_form">Entre em contato</h1>
             <form name="form_conato" class="form_contato" method="post" action="<?PHP ECHO URLPH.DS.'cliente/enviaremail'?>">
                <label>
                    Nome:<br>
                    <input type="text" name="nome" required>
                </label>    
                <label>
                    E-mail:<br>
                    <input type="email" name="email" required="required">
                </label>
                <label class="l_uf">
                    UF:<br>
                    <select name="uf" required>
                        <option value=""></option>
                        <option value="AC">AC</option>
                        <option value="AL">AL</option>
                        <option value="AP">AP</option>
                        <option value="AM">AM</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="DP">DP</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MT">MT</option>
                        <option value="MS">MS</option>
                        <option value="MG">MG</option>
                        <option value="PR">PR</option>
                        <option value="PB">PB</option>
                        <option value="PA">PA</option>
                        <option value="PE">PE</option>
                        <option value="PI">PI</option>
                        <option value="RJ">RJ</option>
                        <option value="RN">RN</option>
                        <option value="RS">RS</option>
                        <option value="RO">RO</option>
                        <option value="RR">RR</option>
                        <option value="SC">SC</option>
                        <option value="SE">SE</option>
                        <option value="SP">SP</option>
                        <option value="TO">TO</option>
                    </select>
                </label>
                <label class="l_cidade">
                    Cidade:<br>
                    <input type="text" name="cidade" required>
                </label>
                <label class="l_fixo">
                    Telefone:<br>
                    <input type="text" name="telefone" required>
                </label>
                <label class="l_celular">
                    Celular:<br>
                    <input type="text" name="celular">
                </label>
                <label>
                    Assunto:<br>
                    <input type="text" name="assunto" required>
                </label>

                <label>
                    Descrição:<br>
                    <textarea name="descricao" class="areatxt" rows="5" required></textarea>
                </label>
                <div class="env_botoes_form">
                    <input type="submit" value="Enviar">
                </div>
            </form>   
     </section>
     
        <!--
     <section class="row env_contato_descrito">
         <article class="layout-6 txt_contato">
            <h1 class="tt_cont_desc">Você nos encontra aqui!</h1>
            <p><strong>Rua:</strong> Monte Aprazivel, 144 - Vila Nova Conceição.</p>
            <p>04513-030, São Paulo - SP</p>
            <p><strong>E-mail:</strong> nous.brasil@labconous.com</p>
            <p><strong>Site:</strong> www.labconous.com</p>
            <p><strong>Tel.:</strong> (11) 3847-0700 <span>- <strong>Fax:</strong> (11) 3847-0704</span></p>
         </article>
         <article class="layout-6 mapa_contato">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.220052434404!2d-46.67220390000001!3d-23.596439799999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5755a382dbe3%3A0xb258cc6321372ab5!2sR.+Monte+Apraz%C3%ADvel%2C+144+-+Vila+Nova+Conceicao%2C+S%C3%A3o+Paulo+-+SP!5e0!3m2!1spt-BR!2sbr!4v1410839735291" frameborder="0" style="border:0"></iframe>
         </article>    
     </section>
        -->
        
     <?php require BSPH.VWPH.INCLUDEPH.DS.'footer.php'; ?>         
</div>


