<div class="row align-items-center justify-content-center">  
    @foreach($cards as $card)
    @if ($card->no < 7)
    @continue
    @endif
    <div id="{{$card->id}}" class="col-12 col-sm-7 col-md-4 col-lg-3 maxi-card no-gutters">
        <div class="hover-card no-gutters">
            <img class="img-fluid thumbnail hover-card-bg" src="{{$card->img_link}}"/>
        </div>
        <div class="hover-card-overlay">{!!$card->desc!!}</div>
        <div id="" class="ch-card-title text-uppercase text-center">{{$card->title}}</div>
    </div>
    @endforeach
</div>