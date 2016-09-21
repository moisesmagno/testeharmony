<?php
    class email{
        
        function enviaEmail($dados = array()){
        
            require BSPH.LIBPH.DS.'phpmailer/class.phpmailer.php';
            
            // Inicia a classe PHPMailer
            $mail = new PHPMailer();

            // Define os dados do servidor e tipo de conexão
            // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
            // Define o método de envio
            $mail->Mailer     = "smtp";
            $mail->IsHTML(true);// Define que a mensagem será SMTP
            $mail->Host = "smtp.gmail.com"; // Endereço do servidor SMTP (caso queira utilizar a autenticação, utilize o host smtp.seudomínio.com.br)
            $mail->Port       = "465";   //Define a porta utilizada pelo Gmail para o envio autenticado
            $mail->SMTPSecure = "ssl";//"tls"; // Define que os emails enviadas utilizarão SMTP Seguro tls
            $mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
            $mail->Username = 'br.testeharmony@gmail.com'; // Usuário do servidor SMTP (endereço de email)
            $mail->Password = 'Nous2014'; // Senha do servidor SMTP (senha do email usado)

            // Define o remetente
            // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
            $mail->From = "br.testeharmony@gmail.com"; // Seu e-mail
            $mail->Sender = "br.testeharmony@gmail.com"; // Seu e-mail
            $mail->FromName = utf8_decode("Site Harmony"); // Seu nome

            // Define os destinatário(s)
            // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
            //$mail->AddAddress('moisesmagno@live.com', 'Formulário Harmony');
            $mail->AddAddress('informatica.latam@labconous.com');
            $mail->AddAddress('gabriela.becker@labconous.com');
            $mail->AddAddress('br.testeharmony@gmail.com');
            //$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
            //$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta

            // Define os dados técnicos da Mensagem
            // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
            $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
            $mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)

            // Define a mensagem (Texto e Assunto)
            // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
            $mail->Subject  = utf8_decode($dados['assunto']); // Assunto da mensagem
            $mail->Body = " 
                        <strong>Nome:</strong> ".$dados['nome']."<br>
                        <strong>E-mail:</strong> ".$dados['assunto']."<br>
                        <strong>Estado:</strong> " .$dados['uf']. "<br>
                        <strong>Cidade:</strong> " .$dados['cidade']."<br>
                        <strong>Telefone:</strong> " .$dados['telefone']."<br>
                        <strong>Celular:</strong> " .$dados['celular']."<br>
                        <strong>Assunto:</strong> " .$dados['assunto']."<br>
                        <strong>".utf8_decode('Descrição').": </strong> ".$dados['descricao'];
                            
            $mail->AltBody = 'Este é o corpo da mensagem de teste, em Texto Plano! \r\n 
            <IMG src="http://seudomínio.com.br/imagem.jpg" alt=":)"  class="wp-smiley"> ';

            // Define os anexos (opcional)
            // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
            //$mail->AddAttachment("/home/login/documento.pdf", "novo_nome.pdf");  // Insere um anexo

            // Envia o e-mail
            $enviado = $mail->Send();

            // Limpa os destinatários e os anexos
            $mail->ClearAllRecipients();
            $mail->ClearAttachments();

            // Exibe uma mensagem de resultado
            if ($enviado) {
            echo '<script>alert("Seu contato foi enviado com sucesso, Obrigado!"); location.href="'.URLPH.'/p/contato"</script>';
            } else {
            echo "Não foi possível enviar o e-mail.

            ";
            echo "Informações do erro: 
            " . $mail->ErrorInfo;
            }
        }
        
    }

?>    

