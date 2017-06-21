<?php
/**
 * Created by PhpStorm.
 * User: eren
 * Date: 21/06/2017
 * Time: 09:43
 */

namespace App\Models;


class AuthorModel extends BaseModel
{
    protected $table = 'author';
    public static function getAuthor()
    {
        return self::all()->toArray();
    }
    public static function getAuthorById($id)
    {
        return self::find($id);
    }
}