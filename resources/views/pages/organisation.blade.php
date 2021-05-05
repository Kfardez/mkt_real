@extends('layouts.master',['title' => 'organisation'])

@section('contenu')

<section id="portfolio" class="portfolio">
  <div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="container">
    <div class="section-title">
      <h2> <i class="icofont-ui-settings" style="color: #a30e0e;"></i> Organisation Administrative et Réssouces Humaines</h2>
      <h4>Le <b>L.C.M.K.T</b> dispose d’un organigramme administratif qui suit :</h4>
    </div>

        <div>
            <ul>
                <li>Le Proviseur, comme chef d’Etablissement ;</li>
                <li>Le Proviseur adjoint </li>
                <li>Un Econome ;</li>
                <li>Un Censeur ;</li>
                <li>Un Directeur des Études </li>
                <li>Les Surveillants généraux ;</li>
                <li>Les Professeurs principaux et ;</li>
                <li>Les Chefs des clases ainsi que leurs adjoints.</li>

            </ul
        </div>

        <br>
          <div class="row">
            @if(count($equipes) >= 1)
                @foreach($equipes as $equipe)
                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
                    <div class="member">
                      <div class="pic"><img src="{{ asset('storage/'.$equipe->image) }}" class="img-fluid" alt=""></div>
                      <div class="member-info">
                        <h4>{{$equipe->poste}}</h4>
                        <span>{{$equipe->nom}}</span>
                        <span style=>{{$equipe->telephone}}</span>
                        <div class="social">
                          <a href=""><i class="icofont-twitter"></i></a>
                          <a href=""><i class="icofont-facebook"></i></a>
                          <a href=""><i class="icofont-instagram"></i></a>
                          <a href=""><i class="icofont-linkedin"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
            @else
              <h3>Aucune Actualité pour le moment !</h3>
            @endif
          </div>
  </div>
</section>

  <section class="about-lists">
      <div class="container">

        <div class="row no-gutters">

            @if(count($equipes) >= 1)
              @foreach($equipes as $equipe)
                <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up">
                  <span><i class="icofont-stylish-down"></i></span>
                  <h4>{{$equipe->poste}}</h4>
                  <p>{{$equipe->nom}} </p>
                  <p><b>{{$equipe->telephone}}</b></p>
                </div>
              @endforeach
            @else
              <h4>Aucune information pour le moment.</h4>
            @endif

        </div>

      </div>
    </div>
    </section>


@endsection
