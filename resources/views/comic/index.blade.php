@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center my-3">
                <a href="{{ route('comic.create') }}" class="btn btn-primary">Add your comics</a>
            </div>
        </div>
        <div class="row">
            @foreach ($comics as $item)
                <div class="col">
                    <div class="card my-3">
                        <div class="card-title d-flex flex-column align-items-center">
                            <h5 class="mt-3">{{ $item->id }} - {{ $item->title }}</h5>
                            <div class="link d-flex flex-row">
                                <a href="{{ route('comic.show', $item) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                <a href="{{ route('comic.edit', $item->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                <form action="{{ route('comic.destroy', $item->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                </form>
                            </div>
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