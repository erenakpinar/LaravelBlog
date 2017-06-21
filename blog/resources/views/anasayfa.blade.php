@extends('masterpage')
@section('title', 'Kaktüs Yazılım')
@section('content')
    <h1 class="page-header">
        Anasayfa
        <small>Bloglar</small>
    </h1>
    <?php foreach ($posts as $post) { ?>
    <!-- First Blog Post -->
    <h2>
        <a href="#"><?php echo $post->name; ?></a>
    </h2>
    <p class="lead">
        by <a href="index.php"><?php echo $post->author; ?></a>
        <span class="glyphicon glyphicon-time"></span> <?php echo $post->publish_date; ?></p>
    <hr>
    <img class="img-responsive" src="<?php echo $post->header_img; ?>" alt="<?php echo $post->name; ?>">
    <hr>
    <p><?php echo substr($post->content, 0, 500); ?></p>
    <a class="btn btn-primary" href="#">Okumaya Devam Et <span class="glyphicon glyphicon-chevron-right"></span></a>

    <hr>
    <?php
    }
    ?>

    <!-- Pager -->
    <ul class="pager">
        <li class="previous">
            <a href="#">&larr; Older</a>
        </li>
        <li class="next">
            <a href="#">Newer &rarr;</a>
        </li>
    </ul>
@endsection
