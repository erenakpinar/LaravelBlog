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

        return View('admin/post/postlist', ['posts' => $posts, 'status' => null]);
    }

    public function postCreate()
    {
        $category = Models\CategoryModel::getCategory();

        return View('admin/post/create', ['category' => $category]);
    }

    public function postEdit($id)
    {
        $post = Models\PostModel::getPostById($id);
        $category = Models\CategoryModel::getCategory();

        return View('admin/post/edit', ['post' => $post, 'category' => $category]);
    }

    public function postDelete($id)
    {
        if (Models\PostModel::postDelete($id)) {
            $status = 'Yazı Başarıyla Silindi.';
        } else {
            $status = 'Yazıyı silerken bir hata oluştu.';
        }
        $posts = Models\PostModel::getPostList();

        return View('admin/post/postlist', ['posts' => $posts, 'status' => $status]);
    }


}