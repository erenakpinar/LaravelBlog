<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use App\Http\Requests;

class LaravelController extends Controller
{
    public function anasayfa()
    {

        $postArr = array();
        $posts = Models\PostModel::getPublishPostWithAuthor();
        foreach ($posts as $post) {
            $postArr[] = array(
                'name' => $post->name,
                'header_img' => $post->header_img,
                'publish_date' => $post->publish_date,
                'author' => $post->first_name . " " . $post->last_name
            );
        }

        return view('anasayfa', ['posts' => $postArr]);

    }

    public function hakkimizda()
    {
        $title = "Hakkımızda";
        $keywords = "Hakkımızda Anahtar Kelimeler";
        $sayfa = "Hakkımızda Sayfasındayız";
        return view('hakkimizda')->with('sayfaTitle', $title)->with('sayfaKeywords', $keywords)->with('sayfaIsmi', $sayfa);
    }

    public function iletisim()
    {
        $title = "İletişim";
        $keywords = "İletişim Anahtar Kelimeler";
        $sayfa = "İletişim Sayfasındayız";
        return view('iletisim', compact('title', 'keywords', 'sayfa'));
    }

    public function post($id = null)
    {

        if ($id) {
            $deger = $id;
        } else {
            $deger = 'Parametre Değeri Bulunmamaktadır';
        }

        $title = "Parametre Denemesi";
        $keywords = "Parametre Denemesi Anahtar Kelimeler";
        $sayfa = "Parametre Denemesi Sayfasındayız";
        return view('post', compact('title', 'keywords', 'sayfa', 'deger', 'id'));

    }
}