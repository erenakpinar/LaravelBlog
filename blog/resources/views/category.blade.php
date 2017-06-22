@extends('masterpage')

@section('title', 'Kategori Yazıları')
@section('content')
    <h1 class="page-header">
        Kategori
        <small>Yazıları</small>
    </h1>
    @include('partials.postlist')
@endsection
