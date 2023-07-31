@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center my-3">
                <a href="#" class="btn btn-primary">Aggiungi il tuo fumetto</a>
            </div>
        </div>
        <div class="row">
            @foreach ($comics as $item)
                <div class="col">
                    <div class="card my-3">
                        <div class="card-title d-flex flex-column align-items-center">
                            <h5 class="mt-3">{{ $item->id }} - {{ $item->title }}</h5>
                            <a href="{{ route('comic.show', $item) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        </div>
                        <div class="card-body d-flex justify-content-center">
                            <img class="image" src="{{ $item->thumb }}">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection