@extends('base')
@section('titel','Kunden')
@section('content')
<h1>Übersicht aller Kunden</h1>
<div class="d-flex">
    @foreach($kunden as $kunde)
    <div class="card m-3" style="width: 18rem;">
    <img src="{{ asset('storage/'. $kunde->kunden->image) }}" class="card-img-top" alt="{{$kunde->kunden->vorname}}">  
    <div class="card-body">
        <h5 class="card-title">{{$kunde->kunden->vorname}} {{$kunde->kunden->nachname}}</h5>
        <p class="card-text">{{$kunde->kunden->beschreibung}}</p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <p><strong>Strasse:</strong> {{$kunde->strasse}}</p>
            <p><strong>Hausnummer:</strong> {{$kunde->hausnummer}}</p>
            <p><strong>Postleitzahl:</strong> {{$kunde->postleitzahl}}</p>
            <p><strong>Ort:</strong> {{$kunde->ort}}</p></li>
        <!-- <li class="list-group-item"><strong>Beschreibung: </strong>{{$kunde->kunden->beschreibung}}</li> -->
        <li class="list-group-item"><strong>Kontaktart: </strong>{{$kunde->kunden->kontaktart->kontaktart}}</li>
    </ul>
    </div>
    @endforeach

</div>

@endsection

