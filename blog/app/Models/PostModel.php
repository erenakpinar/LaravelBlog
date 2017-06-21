<?php

namespace App\Models;

use App\Helpers;

class PostModel extends BaseModel
{
    protected $table = 'post';
    protected $fillable = ['name', 'content', 'header_img', 'publish_date', 'created_date', 'status', 'author_id', 'seo_url', 'view'];
    public $timestamps = false;

    public static function getPost()
    {
        return self::all()->toArray();
    }

    public static function getPostById($id)
    {
        return self::find($id);
    }

    public static function getPostWithAuthorDetailsByUrl($name)
    {
        return self::where('seo_url', $name)
            ->join('author', 'post.author_id', '=', 'author.id')
            ->first();

    }
    public static function getPostDetailsByUrl($name)
    {
        return self::where('seo_url', $name)
            ->first();

    }
    public static function getPublishPost()
    {
        return self::where('status', 'publish')
            ->get()->toArray();
    }

    public static function getPublishPostWithAuthor()
    {
        return self::where('status', 'publish')
            ->join('author', 'post.author_id', '=', 'author.id')
            ->get();
    }

    public static function postViewUpdate($url)
    {
        $post = self::getPostDetailsByUrl($url);
        $post->update(['view' => $post->view + 1]);
    }
}