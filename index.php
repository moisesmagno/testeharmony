<?php

    session_start();
    
    //Chamdno o autoload.
    require 'lib/Autoload.php';
    
    $obj = new Bootstrap();
    $obj->run();

