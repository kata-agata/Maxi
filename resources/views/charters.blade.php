@extends('layouts.layout')

@section('styles')
<link rel="stylesheet" href="{{ URL::asset('css/offers_1.css')}}">
@stop

@section('scripts')
    {!! $map['js'] !!}
@endsection

@section('header-img')
<div class='header-photo'>
    <img src="http://www.maxiskippers.pl/img/tlo2.jpg" class="img-fluid w-100 header-bg"/>
</div>
<!--<div class="video-background">  
    <div class="video-holder"> Video hides on xs screen size
        @youtube('<iframe src="https://www.youtube.com/embed/D4MXowfOmII"></iframe>')
    </div>
</div>-->
@endsection

@section('content')
<section id="yachtTypes" class="container-fluid h-100">
    @include('sections.charters.yachtTypes')
</section>
<section id="chartersMap" class="container-fluid h-100">
    @include('sections.charters.map')
</section>
<div id="map-container" class="map-container container-fluid">
    <div class="row justify-content-center">
        <div class="col-11 col-md-10">  {!! $map['html'] !!}</div>         
    </div>

</div>
<section id="faq" class="container-fluid h-100">
    @include('sections.charters.faq')
</section>
@endsection
