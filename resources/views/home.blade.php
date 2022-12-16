@extends('layouts.app')

@section('content')
    <main>
        <div class="containercard pt-3">
            <div class="container">
                <div class="row row-cols-5 d-flex gap-5">
                    @foreach ($movies as $movie)
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ $movie->image }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $movie->title }}</h4>
                                    <h5 class="card-title">{{ $movie->original_title }}</h5>
                                    <p class="card-text">Data di uscita: {{ $movie->date }}</p>
                                    <p class="card-text">Nazionalità : {{ $movie->nationality }}</p>
                                    <p class="card-text">Vote : {{ $movie->vote }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
