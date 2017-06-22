<?php
/**
 * Created by PhpStorm.
 * User: eren
 * Date: 22/06/2017
 * Time: 10:28
 */
?>
@extends('masterpage')

@section('title', 'Arama Sonuçları')
@section('content')
    <h1 class="page-header">
        {{$value}}
        <small> için arama sonuçları</small>
    </h1>
    @if($posts == null)
        <p>
            "{{$value}}" aramasına karşılık bir sonuç bulunamadı.
        </p>
    @else
        @foreach ($posts as $post)
            <h2>
                <a href="{{url('yazi/'.$post['seo_url'])}}">{{$post['name']}}</a>
            </h2>
            <p class="lead">
                <i class="fa fa-user"></i>
                <a href="">
                    {{$post['author']}}
                </a>
                <span class="fa fa-clock-o"></span>
                {{date("d-m-Y", strtotime($post['publish_date']))}}
            </p>
            <hr>
            <img class="img-responsive" src="{{$post['header_img']}}" alt="{{$post['name']}}">
            <hr>

            <a class="btn btn-primary" href="#">Okumaya Devam Et <span class="glyphicon glyphicon-chevron-right"></span></a>

            <hr>
        @endforeach
    @endif

@endsection

