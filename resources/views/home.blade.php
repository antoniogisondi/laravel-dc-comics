@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-12">
                <div class="card">
                    <img src="{{ $comic->thumb}}" alt="">
                </div>
            </div> 
            @endforeach
        </div>
    </div>
@endsection
    