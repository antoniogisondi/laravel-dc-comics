@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col">
                @if(!empty($comic->thumb && $comic->cover_image && $comic->thumb2))
                <img src="{{ $comic->thumb }}" class="img-fluid">
                @else
                    <h5>Immagine non disponibile</h5>
                @endif
            </div>

            <div class="col">
                <h3>{{ $comic->title }}</h3>
                <p>{{ $comic->description }}</p>
                <h6><strong>Series:</strong> {{ $comic->series }}</h6>
                <h6><strong>Type:</strong> {{ $comic->type }}</h6>
                <h6><strong>Price:</strong> {{ $comic->price }}</h6>
                <h6><strong>Date:</strong> {{ $comic->sale_date }}</h6>
                <p><strong>Artists:</strong> {{ $comic->artists }}</p>
                <p><strong>Writers:</strong> {{ $comic->writers }}</p>
            </div>
        </div>
    </div>
@endsection