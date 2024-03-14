@extends('base')
@section('titel','Kontakt-Art')
@section('content')
<div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
            <div class="alert alert-success" role="alert">
                    Kontakt Art erfolgreich angelegt
                </div>
                <h2 class="mb-3">{{ $kontakt->kontaktart }}</h2>
                <a href="{{ route('kontakt_art') }}" class="btn btn-primary">Zurück zur Übersicht</a>
            </div>
        </div>
    </div>
@endsection