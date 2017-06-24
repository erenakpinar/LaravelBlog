<?php
/**
 * Created by PhpStorm.
 * User: eren
 * Date: 24/06/2017
 * Time: 21:51
 */

namespace App\Classes;
use App\Models;

class WordCount
{
    public static function getWordCount()
    {
        $posts = Models\PostModel::getAllPost();

        $totalWord = 0;
        foreach ($posts as $post) {
            $postContent = $post->content;
            $postContent = nl2br($postContent);
            $postContent = strip_tags($postContent);
            $postContent = str_replace('-', ' ', $postContent);
            $totalWord += count(explode(' ', $postContent));
        }
        return $totalWord;
    }
}