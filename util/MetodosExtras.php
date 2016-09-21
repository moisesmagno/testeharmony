<?php 
    class MetodosExtras{
        //Redireciona páginas,(não todas eim).
        public function redireciona($url = ''){
            header('location: '.URLPH.'/'.$url);
        }
    }
?>