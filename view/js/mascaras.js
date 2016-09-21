   /*Função Pai de Mascaras*/
        function Mascara(o,f){
                v_obj=o
                v_fun=f
                setTimeout("execmascara()",1)
        }
        
        /*Função que Executa os objetos*/
        function execmascara(){
                v_obj.value=v_fun(v_obj.value)
        }
        
        /*Função que Determina as expressões regulares dos objetos*/
        function leech(v){
                v=v.replace(/o/gi,"0")
                v=v.replace(/i/gi,"1")
                v=v.replace(/z/gi,"2")
                v=v.replace(/e/gi,"3")
                v=v.replace(/a/gi,"4")
                v=v.replace(/s/gi,"5")
                v=v.replace(/t/gi,"7")
                return v
        }
        
         /*Função que padroniza DATA (Formação e Experiência)*/
        function Data(v){
                v=v.replace(/\D/g,"") 
                v=v.replace(/(\d{2})(\d)/,"$1/$2") 
                return v
        }
        
        /*Criando a máscara do cpf.*/
        function Cpf(v){
                v=v.replace(/\D/g,"")                                   
                v=v.replace(/(\d{3})(\d)/,"$1.$2")         
                v=v.replace(/(\d{3})(\d)/,"$1.$2")         
                                                                                                 
                v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2")
 
                return v
        }
        
        /*Função que padroniza dad de nascimento*/
        function Datanasc(v){
                v=v.replace(/\D/g,"") 
                v=v.replace(/(\d{2})(\d)/,"$1/$2") 
                v=v.replace(/(\d{2})(\d)/,"$1/$2") 
                return v
        }
        
        /*Função que padroniza telefone (11) 4184-1241*/
        function Telefone(v){
                v=v.replace(/\D/g,"")                            
                v=v.replace(/^(\d\d)(\d)/g,"($1) $2") 
                v=v.replace(/(\d{4})(\d)/,"$1-$2")      
                return v
        }
        
        /*Função que padroniza telefone celular (11) 99184-1241*/
        function TelefoneCel(v){
                v=v.replace(/\D/g,"")                            
                v=v.replace(/^(\d\d)(\d)/g,"($1) $2") 
                v=v.replace(/(\d{5})(\d)/,"$1-$2")      
                return v
        }
        
        /*Função que padroniza CEP*/
        function Cep(v){
                v=v.replace(/D/g,"")                            
                v=v.replace(/^(\d{5})(\d)/,"$1-$2") 
                return v
        }
        
        /*Função que padroniza CNPJ*/
        function Cnpj(v){
                v=v.replace(/\D/g,"")                              
                v=v.replace(/^(\d{2})(\d)/,"$1.$2")      
                v=v.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3") 
                v=v.replace(/\.(\d{3})(\d)/,".$1/$2")              
                v=v.replace(/(\d{4})(\d)/,"$1-$2")                        
                return v
        }
        
        /*Criando a máscara para inscrição estadual.*/
        function InscEst(v){
                v=v.replace(/\D/g,"")                                   
                v=v.replace(/(\d{3})(\d)/,"$1.$2")         
                v=v.replace(/(\d{3})(\d)/,"$1.$2")         
                                                                                                 
                v=v.replace(/(\d{3})(\d{1,3})$/,"$1.$2")
 
                return v
        }
        
        