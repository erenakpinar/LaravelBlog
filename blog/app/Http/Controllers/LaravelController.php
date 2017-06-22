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
        if (!$name) {
            return view('page404');
        }

        $post = Models\PostModel::getPostWithAuthorDetailsByUrl($name);
        if ($post == null) {
            return view('page404');
        }

        Models\PostModel::postViewUpdate($post->id);
        return view('post', ['post' => $post]);

    }

    public function about()
    {
        return view('about');
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