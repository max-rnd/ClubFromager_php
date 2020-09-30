<?php


namespace Model;


class Autoloader
{
    static function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }
    static function autoload($class)
    {
        $file = str_replace('\\', '/', $class);
        $file = $_SERVER['DOCUMENT_ROOT'].'/'.$file.'.php';
        // Remplacer $_SERVER['DOCUMENT_ROOT'] par le chemin absolut avec Bitnami

        if(file_exists($file))
            return require $file;

    }
}