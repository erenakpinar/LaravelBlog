<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use App\Http\Requests;
use App\Helpers;
use App\Classes;

class LaravelController extends Controller
{
    public function index()
    {

        $postArr = array();
        $posts = Models\PostModel::getPublishPostWithAuthor();
        foreach ($posts as $post) {
            $postArr[] = array(
                'name' => $post->name,
                'header_img' => $post->header_img,
                'publish_date' => $post->publish_date,
                'author' => $post->first_name . " " . $post->last_name,
                'seo_url' => $post->seo_url
            );
        }
        return view('index', ['posts' => $postArr]);
    }

    public function post($name = null)
    {

        if ($name) {
            $post = Models\PostModel::getPostWithAuthorDetailsByUrl($name);
            if ($post == null) {
                return view('page404');
            }

            Models\PostModel::postViewUpdate($post->id);
        } else {
            return view('page404');
        }

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

        $postArr = array();
        $posts = Models\CategoryModel::getCategoryPostByUrl($urlName);

        foreach ($posts as $post) {

            $postArr[] = array(
                'name' => $post->name,
                'header_img' => $post->header_img,
                'publish_date' => $post->publish_date,
                'author' => $post->first_name . " " . $post->last_name,
                'seo_url' => $post->seo_url
            );
        }

        return view('category', ['posts' => $postArr]);

    }
    public function search()
    {
        $value = $_GET['search'];
        $postArr = array();
        $posts = Models\PostModel::postSearch($value);

        foreach ($posts as $post) {
            $postArr[] = array(
                'name' => $post->name,
                'header_img' => $post->header_img,
                'publish_date' => $post->publish_date,
                'author' => $post->first_name . " " . $post->last_name,
                'seo_url' => $post->seo_url,
            );
        }
        return view('search', ['posts' => $postArr, 'value' => $value]);

    }
}