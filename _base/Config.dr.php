<?php
/* URL DO SISTEMA */
require 'ambiente.php';
define('BASE', INICIO); //Url rais do site

/* BANCO DE DADOS */
if(AMBIENTE == 'local'):
    define('SIS_DB_HOST', 'localhost'); //Link do banco de dados
    define('SIS_DB_USER', 'root'); //Usuário do banco de dados
    define('SIS_DB_PASS', ''); //Senha  do banco de dados
    define('SIS_DB_DBSA', 'divulgue_region'); //Nome  do banco de dados
else:
    define('SIS_DB_HOST', 'localhost'); //Link do banco de dados
    define('SIS_DB_USER', 'divulgue_user'); //Usuário do banco de dados
    define('SIS_DB_PASS', '86oj34WHgg'); //Senha  do banco de dados
    define('SIS_DB_DBSA', 'divulgue_divulgueregion'); //Nome  do banco de dados
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