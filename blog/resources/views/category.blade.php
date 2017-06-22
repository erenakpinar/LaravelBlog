@extends('masterpage')

@section('title', 'Kaktüs Yazılım')
@section('content')
    <h1 class="page-header">
        Anasayfa
        <small>Bloglar</small>
    </h1>
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
@endsection
