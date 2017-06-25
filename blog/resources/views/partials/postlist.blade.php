<?php
/**
 * Created by PhpStorm.
 * User: eren
 * Date: 22/06/2017
 * Time: 15:42
 */
?>

@foreach ($posts as $post)

    <h2>
        <a href="{{url('yazi/'.$post['seo_url'])}}">{{$post['name']}}</a>
    </h2>
    <p class="lead">
        <i class="fa fa-user"></i>
        <a href="">
            {{$post['author']}}
        </a>
        @if(!empty($post['publish_date']))
            <span class="fa fa-clock-o"></span>
            {{date("d-m-Y", strtotime($post['publish_date']))}}
        @endif

    </p>
    <hr>
    <img class="img-responsive" src="{{$post['header_img']}}" alt="{{$post['name']}}">
    <hr>

    <a class="btn btn-primary" href="{{url('yazi/'.$post['seo_url'])}}">Okumaya Devam Et <span
                class="glyphicon glyphicon-chevron-right"></span></a>

    <hr>
@endforeach