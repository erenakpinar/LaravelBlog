@extends('masterpage')

@section('title', 'Kaktüs Yazılım')
@section('content')
    <h1 class="page-header">
        Anasayfa
        <small>Bloglar</small>
    </h1>
    @include('partials.postlist')
@endsection
