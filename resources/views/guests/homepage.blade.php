@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-3 p-3">
                    <div class="card">
                        <img style="object-fit: cover; aspect-ratio: 3/4" src="{{ $movie['img_url'] }}" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie['title'] }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted ">{{ $movie['original_title'] }}</h6>
                            <p class="card-text">{{ $movie['vote'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
