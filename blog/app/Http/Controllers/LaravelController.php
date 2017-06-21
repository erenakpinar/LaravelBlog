<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use App\Http\Requests;

class LaravelController extends Controller
{
    public function anasayfa()
    {
        // $posts = \DB::table('post')->get();
        //$authors = \DB::table('author')->get();
        $posts = Models\PostModel::getPost();
        $authors = Models\AuthorModel::getAuthor();
        return view('anasayfa', ['posts' => $posts, 'authors' => $authors]);
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