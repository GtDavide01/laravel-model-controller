@extends('layouts.app')

@section('content')
    <main>
        <div class="row row-cols-5">
            <div class="col">
                <div class="card">
                    @foreach ($movies as $movie)
                        <h1>{{ $movie->id }}</h1>
                        <h2>{{ $movie->title }}</h2>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
