@extends('masterpage')
@section('title', 'Hakkımızda')
@section('content')
    @for($i = 0; $i<count($text); $i++)
        <b> {{$i}} - {{$text[$i]}}</b><br>
    @endfor
    <h1 class="page-header">Hakkımızda
        <small>
            Merhaba!
        </small>
    </h1>
    <p>
        Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir
        matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500'lerden beri
        endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı
        zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960'larda Lorem Ipsum pasajları da içeren Letraset
        yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü
        yayıncılık yazılımları ile popüler olmuştur.
    </p>

@endsection