@extends('layouts.layout')

@section('styles')
<link rel="stylesheet" href="{{ URL::asset('css/offers.css')}}">
<link rel="stylesheet" href="{{ URL::asset('css/realizations.css')}}">
@stop

@section('header-img')
<div class='header-photo'>
    <img src="http://www.maxiskippers.pl/img/header.jpg" class="img-fluid w-100 header-bg"/>
</div>
<!--<div class="video-background">  
    <div class="video-holder"> Video hides on xs screen size
        @youtube('<iframe src="https://www.youtube.com/embed/D4MXowfOmII"></iframe>')
    </div>
</div>-->
@endsection

@section('content')
<section id='offersSection' class="container-fluid">
    @include('sections.offersSection')
    <div id="shorts">@include('sections.offersShorts')</div>
</section>
<section id="realizationsSection" class="container-fluid h-100">
    @include('sections.realizations')
</section>
<section id="tags1" class="container-fluid">
 @include('layouts.tags')
</section>
<section id="eventsSection" class="container-fluid h-100">
    @include('sections.events')
</section>
<section id="aboutus" class="container-fluid text-white" style="background-color: black">
 @include('sections.about')
</section>
<section id="contact" class="container-fluid" style="background-color: white">
 @include('sections.contact')
</section>
@endsection
