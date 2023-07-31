@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($comics as $item)
                <div class="col">
                    <div class="card">
                        <img src="{{ $item->thumb }}">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection