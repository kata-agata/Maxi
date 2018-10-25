<div class="title text-center"><h2>Realizacje</h2></div>
<div class="row align-items-center justify-content-center">
@foreach($posts as $post)
@if($loop->iteration < 3)
<div class="card realization-card col-12 col-md-4 col-lg-3 h-100 d-flex align-items-stretch">

    <img class="card-img-top" src="{{$post->photo_link}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title text-center">{{$post->title_pl}}</h5>
    <p class="card-text">{{$post->text_pl}}</p>
  </div>
  <div class="row">
      <div class="col-12 text-center"><a href="#">Zobacz więcej</a></div>
  </div>
</div>

@endif
@endforeach
</div>