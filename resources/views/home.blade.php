@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="{{ route('comic.index') }}">
                    <button class="btn btn-primary">Push to start</button>
                </a>
            </div>
        </div>
    </div>
@endsection
    