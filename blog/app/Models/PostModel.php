<?php

namespace App\Models;

class PostModel extends BaseModel
{
    protected $table = 'post';
    protected $fillable = ['name', 'content', 'header_img', 'publish_date', 'created_date', 'status', 'author_id', 'seo_url', 'view'];
    public $timestamps = false;

    public static function getPost()
    {
        return self::all()->toArray();
    }

    public static function getAllPost()
    {
        return self::all();
    }

    public static function getPostById($id)
    {
        return self::find($id);
    }

    public static function getPostList()
    {
        return self::join('users', 'post.author_id', '=', 'users.id')
            ->select('post.id', 'post.name', 'post.view', 'post.publish_date', 'post.created_date', 'post.header_img', 'post.status', 'users.name as user_name', 'users.profile_img','post.seo_url')
            ->get()
            ->toArray();

    }

    public static function getPostWithAuthorDetailsByUrl($name)
    {
        return self::where('seo_url', $name)
            ->join('author', 'post.author_id', '=', 'author.id')
            ->select('post.id', 'post.name', 'post.seo_url', 'post.content', 'post.view', 'post.publish_date', 'post.header_img', 'author.first_name', 'author.last_name', 'post.status')
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
            ->get()
            ->toArray();
    }

    public static function getPublishPostWithAuthor()
    {
        return self::where('status', 'publish')
            ->join('author', 'post.author_id', '=', 'author.id')
            ->get();
    }

    public static function postViewUpdate($id)
    {
        $post = self::getPostById($id);
        $post->update(['view' => $post->view + 1]);
    }

    public static function postSearch($value)
    {
        return self::where('name', 'ilike', "%$value%")
            ->orWhere('content', 'ilike', "%$value%")
            ->join('author', 'post.author_id', '=', 'author.id')
            ->get();
    }

    public static function getPostCount()
    {
        return self::count();
    }
}