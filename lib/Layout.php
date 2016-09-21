<?php
    class Layout{
        public function montaview($view){
            if($view == 'home' && file_exists(BSPH.DS.VWPH.DS.PAGINAPH.DS.$view.'.php')):
                require BSPH.VWPH.INCLUDEPH.DS.'head.php';
                require BSPH.VWPH.INCLUDEPH.DS.'menus.php';
                require BSPH.VWPH.PAGINAPH.DS.$view.'.php';
                require BSPH.VWPH.INCLUDEPH.DS.'fechapagina.php';
            elseif($view == 'saibamais' && file_exists(BSPH.DS.VWPH.DS.PAGINAPH.DS.$view.'.php')):
                require BSPH.VWPH.INCLUDEPH.DS.'head.php';
                require BSPH.VWPH.INCLUDEPH.DS.'menus.php';
                require BSPH.VWPH.PAGINAPH.DS.$view.'.php';
                require BSPH.VWPH.INCLUDEPH.DS.'fechapagina.php';
            elseif($view == 'clinicas' && file_exists(BSPH.DS.VWPH.DS.PAGINAPH.DS.$view.'.php')):
                require BSPH.VWPH.INCLUDEPH.DS.'head.php';
                require BSPH.VWPH.INCLUDEPH.DS.'menus.php';
                require BSPH.VWPH.PAGINAPH.DS.$view.'.php';
                require BSPH.VWPH.INCLUDEPH.DS.'fechapagina.php';        
            elseif($view == 'resultados_busca' && file_exists(BSPH.DS.VWPH.DS.PAGINAPH.DS.$view.'.php')):
                require BSPH.VWPH.INCLUDEPH.DS.'head.php';
                require BSPH.VWPH.INCLUDEPH.DS.'menus.php';
                require BSPH.VWPH.PAGINAPH.DS.$view.'.php';
                require BSPH.VWPH.INCLUDEPH.DS.'fechapagina.php'; 
            elseif($view == 'profissionais_saude' && file_exists(BSPH.DS.VWPH.DS.PAGINAPH.DS.$view.'.php')):
                require BSPH.VWPH.INCLUDEPH.DS.'head.php';
                require BSPH.VWPH.INCLUDEPH.DS.'menus.php';
                require BSPH.VWPH.PAGINAPH.DS.$view.'.php';
                require BSPH.VWPH.INCLUDEPH.DS.'fechapagina.php'; 
            elseif($view == 'contato' && file_exists(BSPH.DS.VWPH.DS.PAGINAPH.DS.$view.'.php')):
                require BSPH.VWPH.INCLUDEPH.DS.'head.php';
                require BSPH.VWPH.INCLUDEPH.DS.'menus.php';
                require BSPH.VWPH.PAGINAPH.DS.$view.'.php';
                require BSPH.VWPH.INCLUDEPH.DS.'fechapagina.php';     
            elseif($view == 'login' && file_exists(BSPH.DS.VWPH.DS.PAGINAPH.DS.$view.'.php')):
                require BSPH.VWPH.INCLUDEPH.DS.'head.php';
                require BSPH.VWPH.INCLUDEPH.DS.'menus.php';
                require BSPH.VWPH.PAGINAPH.DS.$view.'.php';
                require BSPH.VWPH.INCLUDEPH.DS.'fechapagina.php';     
            elseif($view == 'adm' && file_exists(BSPH.DS.VWPH.DS.PAGINAPH.DS.$view.'.php')):
                require BSPH.VWPH.INCLUDEPH.DS.'head.php';
                require BSPH.VWPH.INCLUDEPH.DS.'menus.php';
                require BSPH.VWPH.PAGINAPH.DS.$view.'.php';
                require BSPH.VWPH.INCLUDEPH.DS.'fechapagina.php';    
             elseif($view == 'editarcliente' && file_exists(BSPH.DS.VWPH.DS.PAGINAPH.DS.$view.'.php')):
                require BSPH.VWPH.INCLUDEPH.DS.'head.php';
                require BSPH.VWPH.INCLUDEPH.DS.'menus.php';
                require BSPH.VWPH.PAGINAPH.DS.$view.'.php';
                require BSPH.VWPH.INCLUDEPH.DS.'fechapagina.php'; 
              elseif($view == 'clientes_ativos' && file_exists(BSPH.DS.VWPH.DS.PAGINAPH.DS.$view.'.php')):
                require BSPH.VWPH.INCLUDEPH.DS.'head.php';
                require BSPH.VWPH.INCLUDEPH.DS.'menus.php';
                require BSPH.VWPH.PAGINAPH.DS.$view.'.php';
                require BSPH.VWPH.INCLUDEPH.DS.'fechapagina.php';   
              elseif($view == 'clientes_inativos' && file_exists(BSPH.DS.VWPH.DS.PAGINAPH.DS.$view.'.php')):
                require BSPH.VWPH.INCLUDEPH.DS.'head.php';
                require BSPH.VWPH.INCLUDEPH.DS.'menus.php';
                require BSPH.VWPH.PAGINAPH.DS.$view.'.php';
                require BSPH.VWPH.INCLUDEPH.DS.'fechapagina.php'; 
              elseif($view == 'todos_clientes_ativos' && file_exists(BSPH.DS.VWPH.DS.PAGINAPH.DS.$view.'.php')):
                require BSPH.VWPH.INCLUDEPH.DS.'head.php';
                require BSPH.VWPH.INCLUDEPH.DS.'menus.php';
                require BSPH.VWPH.PAGINAPH.DS.$view.'.php';
                require BSPH.VWPH.INCLUDEPH.DS.'fechapagina.php'; 
              elseif($view == 'todos_clientes_inativos' && file_exists(BSPH.DS.VWPH.DS.PAGINAPH.DS.$view.'.php')):
                require BSPH.VWPH.INCLUDEPH.DS.'head.php';
                require BSPH.VWPH.INCLUDEPH.DS.'menus.php';
                require BSPH.VWPH.PAGINAPH.DS.$view.'.php';
                require BSPH.VWPH.INCLUDEPH.DS.'fechapagina.php';  
            endif;
        }
    }

