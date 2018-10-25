

    <div class="row align-items-start justify-content-center badges-row">
         @foreach($badges as  $badge)
        <div class="masonry-item col-6 col-sm-5 col-md-2 col-lg-2 text-center no-gutters">
            <div class="maxi-badge col-12">
                <a href="#{{$badge->id}}"><img class="img-fluid maxi-badge-svg" src="{{$badge->icon_link}}"/></a>
            </div>
            <div class="col-12 maxi-badge-title">
                {{$badge->title}}
            </div>
        </div>
        @endforeach
    </div>

