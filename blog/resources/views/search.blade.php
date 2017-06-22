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
        @include('partials.postlist')
    @endif

@endsection

