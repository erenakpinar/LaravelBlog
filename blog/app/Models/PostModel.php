<?php

namespace App\Models;

use App\Helpers;

class PostModel extends BaseModel
{
    protected $table = 'post';

    public static function getPost()
    {
        return self::all()->toArray();
    }

    public static function getPostById($id)
    {
        return self::find($id);
    }

    public static function getPostDetailsByUrl($name)
    {
        return self::where('seo_url', $name)
            ->join('author', 'post.author_id', '=', 'author.id')
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
}