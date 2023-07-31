@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Inserisci i dati del tuo fumetto</h3>
                <div>
                    <form action="{{ route('comic.store') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label class="form-label">Titolo</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo del fumetto">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Immagine</label>
                            <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci l'immagine del fumetto">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Prezzo</label>
                            <input type="text" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo del fumetto">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Serie</label>
                            <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie del fumetto">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Data</label>
                            <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci la data del fumetto">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Tipo</label>
                            <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci il tipo del fumetto">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Descrizione</label>
                            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Inserisci la descrizione del fumetto"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Artisti</label>
                            <textarea class="form-control" id="artists" name="artists" rows="3" placeholder="Inserisci gli artisti del fumetto"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Scrittori</label>
                            <textarea class="form-control" id="writers" name="writers" rows="3" placeholder="Inserisci gli scrittori del fumetto"></textarea>
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
@endsection