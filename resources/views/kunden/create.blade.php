@extends('base')
@section('titel','Kunden')
@section('content')
<form action="/kunden-persist" method="Post" enctype ="multipart/form-data">
    @csrf
    <div>
        <label for="vorname">Vorname <span class="text-danger">{{ $errors->first('vorname') }}</span></label><br>
        <input type="text" name="vorname" id="vorname" value="{{old('vorname')}}"><br>
    </div>
    <div>
        <label for="nachname">Nachname <span class="text-danger">{{ $errors->first('nachname') }}</span></label><br>
        <input type="text" name="nachname" id="nachname" value="{{old('nachname')}}"><br>
    </div>
    <hr>
    <div>
        <label for="strasse">Strasse <span class="text-danger">{{ $errors->first('strasse') }}</span></label><br>
        <input type="text" name="strasse" id="strasse" value="{{old('strasse')}}"><br>
    </div>
    <div>
        <label for="hausnummer">Hausnummer <span class="text-danger">{{ $errors->first('hausnummer') }}</span></label><br>
        <input type="text" name="hausnummer" id="hausnummer" value="{{old('hausnummer')}}"><br>
    </div>
    <div>
        <label for="postleitzahl">Postleitzahl <span class="text-danger">{{ $errors->first('postleitzahl') }}</span></label><br>
        <input type="text" name="postleitzahl" id="postleitzahl" value="{{old('postleitzahl')}}"><br>
    </div>
    <div>
        <label for="ort">Ort <span class="text-danger">{{ $errors->first('ort') }}</span></label><br>
        <input type="text" name="ort" id="ort" value="{{old('ort')}}"><br>
    </div>
    <hr>
    <div>
        <label for="beschreibung">Beschreibung <span class="text-danger">{{ $errors->first('beschreibung') }}</span></label><br>
        <textarea name="beschreibung" id="beschreibung" cols="30" rows="2">{{old('beschreibung')}}</textarea><br>
    </div>
<hr>
    <div>
        <label for="kontakt_art">Auswahl Kontaktart</label><br>
        <select name="kontakt_arts_id" id="kontakt_art">
            <option value="">keine Kategorie</option>
            @foreach($kontakt as $art)
                <option value="{{$art->id}}">{{$art->kontaktart}}</option>
            @endforeach
        </select>
        </div>
        <br>
        <hr>
        <div>
            <label>Kundenbild</label><br>
            <input type="file" name="image" id="image">
        </div>
<br>
    <button type="submit">Speichern</button>
  </form>

@endsection