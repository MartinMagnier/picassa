<p class="imglist container">
    @foreach($photos as $c)
        <a href="{{$c->photo}}" data-fancybox data-caption="{{$c->title}}">
            <img src="{{$c->photo}}" alt="">
        </a>
    @endforeach
</p>
