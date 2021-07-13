@extends('layouts.main')

{{-- richiamo il segnaposto con section --}}
@section('main-content')
    <section class="container">
        <button class="h2">CURRENT SERIES</button>
        <div class="cards">
            @foreach ($comicsArray as $comic)
                <div class="card">
                    <div class="cover">
                        <img src="{{$comic["thumb"]}}" alt="copertina">
                    </div>
                    <p>{{$comic["title"]}}</p>
                </div>
            @endforeach
        </div>
        <button class="h5">Load More</button>
    </section>
@endsection
