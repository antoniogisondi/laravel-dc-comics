@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3>Modifica i dati del tuo fumetto</h3>
                    <div>
                        <form action="{{ route('comic.update', $comic->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3">
                                <label class="form-label">Titolo</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo del fumetto" value="{{ $comic->title }}">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Immagine</label>
                                <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci l'immagine del fumetto" value="{{ $comic->thumb }}">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Immagine Cover</label>
                                <input type="text" class="form-control" id="cover_image" name="cover_image" placeholder="Inserisci l'immagine del fumetto" value="{{ $comic->cover_image }}">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Immagine 2</label>
                                <input type="text" class="form-control" id="thumb2" name="thumb2" placeholder="Inserisci l'immagine del fumetto" value="{{ $comic->thumb2 }}">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Prezzo</label>
                                <input type="text" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo del fumetto" value="{{ $comic->price }}">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Serie</label>
                                <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie del fumetto" value="{{ $comic->series }}">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Data</label>
                                <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci la data del fumetto" value="{{ $comic->sale_date }}">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Tipo</label>
                                <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci il tipo del fumetto" value="{{ $comic->type }}">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Descrizione</label>
                                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Inserisci la descrizione del fumetto">{{ $comic->description }}</textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Artisti</label>
                                <textarea class="form-control" id="artists" name="artists" rows="3" placeholder="Inserisci gli artisti del fumetto">{{ $comic->artists }}</textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">Scrittori</label>
                                <textarea class="form-control" id="writers" name="writers" rows="3" placeholder="Inserisci gli scrittori del fumetto">{{ $comic->writers }}</textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Salva</button>
                                <button type="reset" class="btn btn-success">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection