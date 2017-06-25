<?php
/**
 * Created by PhpStorm.
 * User: eren
 * Date: 24/06/2017
 * Time: 21:54
 */
namespace App\Http\Controllers;

use App\Models;

class PostController extends Controller
{
    public function postList()
    {
        $posts = Models\PostModel::getPostList();

        return View('admin/post/postlist',['posts' => $posts]);
    }


}