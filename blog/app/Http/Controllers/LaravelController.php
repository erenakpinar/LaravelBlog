<?php

namespace App\Http\Controllers;

use App\Models;
use App\Http\Requests;
use App\Classes;

class LaravelController extends Controller
{
    public function index()
    {
        $posts = Models\PostModel::getPublishPostWithAuthor();

        return view('index', ['posts' => Classes\Mapping::postMapping($posts)]);
    }

    public function post($name = null)
    {
        // boş gelirse 404
        if (!$name) {
            return view('page404');
        }
        //postu çek
        $post = Models\PostModel::getPostWithAuthorDetailsByUrl($name);
        //post nullsa 404
        if ($post == null) {
            return view('page404');
        }

        Models\PostModel::postViewUpdate($post->id); // görüntülenme arttırmak
        return view('post', ['post' => $post]);

    }

    public function about()
    {

        $postContent = Models\PostModel::getPostById(1)->content;
        $postContent = nl2br($postContent);
        $postContent = strip_tags($postContent);
        $postContent = str_replace('-',' ',$postContent);
        $wordExplode = explode(' ' , $postContent);

        return view('about', ['text' => $wordExplode]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function category($urlName)
    {
        $posts = Models\CategoryModel::getCategoryPostByUrl($urlName);

        return view('category', ['posts' => Classes\Mapping::postMapping($posts)]);
    }

    public function search()
    {
        $value = $_GET['search'];
        $posts = Models\PostModel::postSearch($value);

        return view('search', ['posts' => Classes\Mapping::postMapping($posts), 'value' => $value]);

    }
}