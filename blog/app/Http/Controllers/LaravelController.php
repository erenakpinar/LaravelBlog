<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use App\Http\Requests;
use App\Helpers;

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
                'url' => Helpers\SeoHelper::ReplaceSeoUrl($post->name),
                'content' => $post->content

            );
        }

        return view('index', ['posts' => $postArr]);

    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function post($name = null)
    {

        if ($name) {
            $post = Models\PostModel::getPostDetailsByUrl($name);
        } else {

        }

        return view('post', ['post' => $post]);

    }
}