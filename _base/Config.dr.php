<?php
/* URL DO SISTEMA */
require 'ambiente.php';
define('BASE', INICIO); //Url rais do site

/* BANCO DE DADOS */
if(AMBIENTE == 'local'):
    define('HOST', 'localhost'); //Link do banco de dados local
    define('USUARIO', 'root'); //Usuário do banco de dados local
    define('SENHA', ''); //Senha  do banco de dados local
    define('BANCO', 'divulgue_region'); //Nome  do banco de dados local
else:
    define('HOST', 'localhost'); //Link do banco de dados servidor
    define('USUARIO', ''); //Usuário do banco de dados servidor
    define('SENHA', ''); //Senha  do banco de dados servidor
    define('BANCO', ''); //Nome  do banco de dados servidor
endif;

/* AUTO LOAD DE CLASSES */
//Carregar todas as classes
spl_autoload_register(function ($class){
    //Inclui o controller
    if(strpos($class, 'Controller') > -1):
        if(file_exists('controladores/'.$class.'.php')):
            require_once 'controladores/'.$class.'.php';
        endif;
    elseif(file_exists('sites/'.$class.'.php')):
        require_once 'sites/'.$class.'.php';
    else:
        require_once 'coracao/'.$class.'.php';
    endif;
});