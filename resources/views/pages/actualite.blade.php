@extends('layouts.master',['title' => 'Actualité'])

@section('contenu')

    <section id="cta" class="cta" style="background:linear-gradient(to bottom left, rgb(255, 100, 100),rgba(94, 177, 255, 0.815));;">
        <div class="container" data-aos="zoom-in">

          <div class="row">
            <div class="col-lg-9 text-center text-lg-left">
              <h3 style="color: rgb(2, 90, 2)"><a href="{{ asset('/acceuil') }}" style="color: rgb(4, 14, 104)">Acceuil</a> / <u>Actualité</u></h3>
              <p style="color: rgba(0, 0, 0, 0.959);"></p>
            </div>
            <div class="col-lg-3 cta-btn-container image-center">
                <div class="col-lg-12 col-md-12 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">

                    <img src="assets/img/skills.png" class="img-fluid animated" alt="">
                  </div>
            </div>
          </div>

        </div>
    </section>


    <br>
    <div class="container">
        <h2><i class="icofont-calendar" style="color: #2453ec;"></i> <u> Actualités</u></h2>
        <br>
        <div class="row portfolio-container">
            @if(count($actualites) >= 1 )
              @foreach($actualites as $actualite)
                @if(strlen($actualite->corps) >= 20)
                  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap"   style="border: 1px solid #dbdbdb;padding:0px; margin-bottom:25px;">
                      <img src="{{ asset('storage/'.$actualite->image) }}" class="img-fluid" alt="">
                      <div class="portfolio-info card-body">
                        <h4><b><u>{!!html_entity_decode($actualite->titre)!!}</u></b></h4>
                        <p title="{{$actualite->corps }}">{{ substr($actualite->corps, 0, random_int(60,150))."..." }}
                        <a class="btn btn-primary" href="{{ url('actualite/'.$actualite->id) }}" role="button">Lire plus</a></p>
                      </div>
                    <div class="card-footer">
                        <p class="card-text"><small class="text-muted"><b>{{ $actualite->Publie_par}}</b></small></p>
                        <p class="card-text"><small class="text-muted">Date / Heure : {{$actualite->created_at}}</small></p>
                      </div>
                    </div>
                  </div>

                  @else
                      <td title="{{ $uneRes->commDep }}">{{ $uneRes->commDep }}</td>
                  @endif
              @endforeach
            @else
              <h3>Aucune Actualité pour le moment</h3>
            @endif
        </div>
    </div>
      <br>

@endsection
