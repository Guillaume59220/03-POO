<?php

class Core
{
    /**
     * Core constructor.
     * @param $params
     */
    public function __construct($params)
    {
        #print_r($params);

        # Valeur par défaut
        if(empty($params)) {
            $params['controller']   = 'news';
            $params['action']       = 'index';
        }

        # Récupération des Paramètres
        $controller = ucfirst($params['controller']) . 'Controller';
        $action     = $params['action'];

        $obj = new $controller;
        $obj->$action();

        if($controller == "news" && $action == "index") {
            echo "<h1>JE SUIS SUR LA PAGE ACCUEIL</h1>";
        }

        if($controller == "news" && $action == "categorie") {
            echo "<h1>JE SUIS SUR LA PAGE CATEGORIE</h1>";
        }

        if($controller == "news" && $action == "article") {
            echo "<h1>JE SUIS SUR LA PAGE ARTICLE</h1>";
        }

        if($controller == "membre" && $action == "inscription") {
            echo "<h1>JE SUIS SUR LA PAGE INSCRIPTION</h1>";
        }

    }
}