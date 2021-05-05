@extends('layouts.master2',['title' => 'Showthis'])

@section('contenu')

    <div class="card mb-3">
        <img src="{{ asset('storage/'.$actualite->image) }}" class="card-img-top" alt="..." style="max-width:45em;">
     <div class="card-body">
            <h2 class="card-title" ><b><u>{{ $actualite->titre }}</u></b></h2>
            <p class="card-text" style="text-font:30px;"><b>{{ $actualite->corps }}</b></p>
            <hr>
            <p class="card-text"><small class="text-muted"><b>{{ $actualite->Publie_par}}</b></small></p>
            <p class="card-text"><small class="text-muted">Date : {{ $actualite->created_at}}</small></p>
        </div>
    </div>


@endsection
