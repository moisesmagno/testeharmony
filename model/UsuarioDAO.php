<?php

class UsuarioDAO{
    
        //Validar usuario.
        public function validausuario($obj){
            $sql = 'SELECT 
                    usu_nome,
                    usu_email, 
                    usu_senha,
                    usu_status
                    FROM `tb_usuarios` 
                    WHERE usu_email = :email AND usu_senha = :senha AND usu_status = :status';
            
            $stmt = BD::conn()->prepare($sql);
            $stmt->bindValue(':email', $obj->getEmail() , PDO::PARAM_STR);
            $stmt->bindValue(':senha', $obj->getSenha(), PDO::PARAM_STR);
            $stmt->bindValue(':status', 1, PDO::PARAM_INT);
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
}

