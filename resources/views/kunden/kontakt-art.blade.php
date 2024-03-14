@extends('base')
@section('titel','Kontakt-Art')
@section('content')
<form method="post" action="{{ route('kontakt_art_persist') }}" class="mt-3">
    @csrf
    <div class="form-group">
        <label for="kontakt-art">Kontakt Art <span class="text-danger"> {{ $errors->first('kontakt-art') }}</span></label>
        <input type="text" class="form-control" name="kontakt-art" id="kontakt-art" value="{{ old('kontakt-art') }}">
    </div>
    <button type="submit" class="btn btn-primary">Speichern</button>
</form>
<br>
<hr><br>
<div>
    <ul>
    @if($kontakt)
        @foreach($kontakt as $art)
            <li>{{$art->kontaktart}}</li>
        @endforeach
    @endif
    </ul>


</div>
@endsection