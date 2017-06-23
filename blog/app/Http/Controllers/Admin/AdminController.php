<?php
/**
 * Created by PhpStorm.
 * User: eren
 * Date: 23/06/2017
 * Time: 10:43
 */

namespace App\Http\Controllers;

use App\Models;
use App\Helpers;

class AdminController extends Controller
{
    public function index()
    {
        $tr = array('ş', 'Ş', 'ı', 'I', 'İ', 'ğ', 'Ğ', 'ü', 'Ü', 'ö', 'Ö', 'Ç', 'ç', '(', ')', '/', ':', ',', '.', '…', '?', '“', '”', ' ', '–', '-');
        $en = array('s', 's', 'i', 'i', 'i', 'g', 'g', 'u', 'u', 'o', 'o', 'c', 'c', '', '', '-', '-', '', '', '', '', '', '', ' ', '', '');
        $end = array('  ');
        $end2 = array(' ');
        $postContent = Models\PostModel::getPostById(1)->content;
        $postContent = strip_tags($postContent);
        $echo = str_replace($tr, $en, $postContent);
        $echo = str_replace($end, $end2, $echo);
        $wordExplode = explode(" ", $echo);
        echo count($wordExplode) . '<br>';
        $count = str_word_count($echo, 1);
        echo count($count). '<br>' ;
        var_dump(str_word_count($echo, 1));

        /* var_dump(str_word_count(Helpers\SeoHelper::ReplaceSeoUrl($postContent), 1));
         $wordExplode = explode(". ", $postContent);
         echo '<br>';
         echo count($wordExplode) . '<br>';
         echo $postContent;*/
        die;


        return View('admin/home',
            ['postCount' => Models\PostModel::getPostCount(),
                'catCount' => Models\CategoryModel::getCatCount(),
                'userCount' => Models\UserModel::getUserCount()
            ]);
    }


}