<div class="well">
    <h4>
        Kategoriler
    </h4>
    <div class="row">
        <div class="col-lg-12">
            <ul class="list-unstyled">
                @foreach($category as $cat)
                    <li>
                        <a href="{{url('/kategori/'.$cat['url'])}}">{{$cat['name']}}</a>
                    </li>

                @endforeach
            </ul>
        </div>

    </div>
</div>