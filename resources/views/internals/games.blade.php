@extends('layout')

@section('content')
    
<h1>Store</h1>

<div class="card-columns ">
    @foreach ($games as $game)
    <div class="card m-5" style="width: 18rem;">
        <img src="{{ $game->image }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{ $game->title }}</h5>
          <h3 class="card-title">{{ $game->price }}</h3>
          <p class="card-text text-truncate">{{ $game->description }}</p>
          <a href="#" class="btn btn-primary">See More</a>
        </div>
      </div>
    @endforeach
</div>



@endsection
