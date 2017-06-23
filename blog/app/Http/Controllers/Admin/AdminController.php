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
        $posts = Models\PostModel::getAllPost();

        $totalWord = 0;
        foreach ($posts as $post) {
            $postContent = $post->content;
            $postContent = nl2br($postContent);
            $postContent = strip_tags($postContent);
            $postContent = str_replace('-', ' ', $postContent);
            $totalWord += count(explode(' ', $postContent));
        }

        return View('admin/home',
            ['postCount' => Models\PostModel::getPostCount(),
                'catCount' => Models\CategoryModel::getCatCount(),
                'userCount' => Models\UserModel::getUserCount(),
                'wordCount' => $totalWord
            ]);
    }


}