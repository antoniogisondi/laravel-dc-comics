@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <a href="{{ route('comic.index') }}">
                    <button class="btn btn-primary">Push to show comics</button>
                </a>
            </div>
        </div>
    </div>
@endsection
    