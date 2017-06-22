<?php
/**
 * Created by PhpStorm.
 * User: eren
 * Date: 22/06/2017
 * Time: 16:03
 */

namespace App\Classes;


class Mapping
{
    public static function postMapping($posts)
    {
        $postArr = array();
        foreach ($posts as $post) {
            $postArr[] = array(
                'name' => $post->name,
                'header_img' => $post->header_img,
                'publish_date' => $post->publish_date,
                'author' => $post->first_name . " " . $post->last_name,
                'seo_url' => $post->seo_url
            );
        }
        return $postArr;
    }
}