

    @foreach($cards as $card)
    <div class="row maxi-short align-items-center justify-content-center">
        @php
            $order1=1;
            $order2=2;
        @endphp
        @if(($loop->iteration)%2===1)
            @php
                $order1=1;
                $order2=2;
            @endphp
        @else
            @php
                $order1=2;
                $order2=1;
            @endphp
        @endif
            
        <div id="{{$card->id}}" class="col-12 col-md-6 maxi-card order-md-{{$order1}} no-gutters">
            <div class="hover-card no-gutters">
                <img class="img-fluid thumbnail hover-card-bg" src="{{$card->img_link}}"/>
            </div>
            <div class="hover-card-overlay"><button type="button" class="btn btn-light">Dowiedz się więcej</button></div>
        </div>
        <div class="col-12 col-md-6 card-text order-md-{{$order2}} text-center">
            <div class="h2 card-text-title text-center d-none d-lg-block"> {{$card->title}}</div>
            <div class="h4 card-text-title text-center d-block d-lg-none"> {{$card->title}}</div>
            <div class="text-justify"> {{$card->desc}} </div>
            
        </div>
    </div>
    @endforeach


