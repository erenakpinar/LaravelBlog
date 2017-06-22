<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('css/blog-home.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">Kaktüs Yazılım</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{url('/hakkimizda')}}">Hakkımızda</a>
                </li>
                <li>
                    <a href="{{url('/iletisim')}}">İletişim</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">

    <div class="row">

        <div class="col-md-8">

            @yield('content')

        </div>

        <div class="col-md-4">

            <div class="well">
                <h4>Arama</h4>
                <form action="/arama/" method="get">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit" id="btnSearch">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                    </span>
                    </div>
                </form>
            </div>
            @include('partials.categories')
            <div class="well">
                <h4>İletişim</h4>
                <p>info@kaktusyazilim.com</p>
            </div>

        </div>

    </div>
    <hr>

    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Kolay Yazılım 2017</p>
            </div>
        </div>
    </footer>

</div>

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

</body>

</html>
