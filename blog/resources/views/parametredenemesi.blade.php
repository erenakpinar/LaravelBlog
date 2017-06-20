<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title> {!! $title !!} </title>
    <meta name="keywords" content="{{ $keywords }}">
</head>
<body>

<a href="{{url('/')}}">Ana Sayfa</a>
<a href="{{url('/hakkimizda')}}">Hakkımızda</a>
<a href="{{url('/iletisim')}}">İletişim</a>
<a href="{{url('/parametreDenemesi')}}">Parametresiz Parametre Denemesi</a>
<a href="{{url('/parametreDenemesi/47')}}">47 Parametreli Parametre Denemesi</a>

<strong>Parametre Değerimiz :</strong> {{$deger}}
<br/><br/><br/>

{{$sayfa}}

</body>
</html>