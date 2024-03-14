@extends('base')
@section('titel','Kontakt-Art')
@section('content')
<div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
            <div class="alert alert-success" role="alert">
                    Kunde erfolgreich angelegt
                </div>
                <h2 class="mb-3"></h2>
                <a href="{{ route('kunden_index') }}" class="btn btn-primary">Zurück zur Kundenübersicht</a> 
            </div>
        </div>
    </div>
@endsection