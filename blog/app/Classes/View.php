<?php

/**
 * Created by PhpStorm.
 * User: eren
 * Date: 21/06/2017
 * Time: 19:11
 */
namespace App\Classes;
class View
{
    public static function render($view, $variables = array())
    {
        extract($variables);
        include $view;
        return $view;
    }

    function redirect($url, $permanent = false)
    {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }
}

?>