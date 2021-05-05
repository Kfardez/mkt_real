@extends('layouts.master',['title'=> 'acceuil'])

@section('contenu')


  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url('assets/img/slide/slide1.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Bienvenue au <span>Lycée Collège Marie Kə Tal</span></h2>
                <p class="animate__animated animate__fadeInUp">Le Lycée- Collège Marie Kə Tal est un Établissement secondaire Catholique créé par les Frères Maristes des Écoles (une congrégation religieuse) à la demande du Diocèse de Sarh</p>
                <ul>
                    <li>
                        <a href="{{ asset('/apropos') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">
                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                        Lire plus..</a>
                    </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Slide 1.1 -->
          <div class="carousel-item" style="background-image: url('assets/img/slide/slide1.1.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">L.C.M.K.T</h2>
                <p class="animate__animated animate__fadeInUp">Il est la continuité du travail amorcé par le Collège Communautaire Jean Paul II. Il est ouvert à tous, sans distinction d’ethnie, de religion ou de sexe et vise essentiellement la qualité et la formation intégrale de tous les jeunes.</p>
                <ul>
                    <li>
                        <a href="{{ asset('/apropos') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">
                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                        Lire plus..</a>
                    </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('assets/img/slide/slide2a.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Motivation</h2>
                <p class="animate__animated animate__fadeInUp">A l'image de Macelin Champagnat, je m'engage à ne pas prendre à la légère mon éducation et mes études pour un avernir meilleur !</p>
                <ul>
                    <li>
                        <a href="{{ asset('/apropos') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">
                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                        Lire plus..</a>
                    </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url('assets/img/slide/slide3.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Les Frères Maristes </h2>
                <p class="animate__animated animate__fadeInUp">Les Frères Maristes sont promoteurs et gestionnaires de l’école en étroite collaboration avec les enseignants laïcs et les parents d’élèves sous le parrainage de l’évêque du diocèse de Sarh.</p>
                <ul>
                    <li>
                        <a href="{{ asset('/apropos') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">
                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                        Lire plus..</a>
                    </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Slide 4 -->
          <div class="carousel-item" style="background-image: url('assets/img/slide/slide4.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">L’excellence au L.C.M.K.T</h2>
                <p class="animate__animated animate__fadeInUp">L’excellence dans le travail au collège nous a permis d’être toujours parmi les cinq premiers sur le plan national au baccalauréat avec un pourcentage de 96% ou 97% de taux de réussite. Au BEF/BEPCT (brevet d’études du premier cycle Tchadien) le taux de réussite est toujours de 100%.</p>
                <ul>
                    <li>
                        <a href="{{ asset('/apropos') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">
                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                        Lire plus..</a>
                    </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Slide 5 -->
          <div class="carousel-item" style="background-image: url('assets/img/slide/slide5.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Les Frères Maristes </h2>
                <p class="animate__animated animate__fadeInUp">Les Frères Maristes sont promoteurs et gestionnaires de l’école en étroite collaboration avec les enseignants laïcs et les parents d’élèves sous le parrainage de l’évêque du diocèse de Sarh.</p>
                <ul>
                    <li>
                        <a href="{{ asset('/apropos') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">
                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                        Lire plus..</a>
                    </li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Slide 6 -->
          <div class="carousel-item" style="background-image: url('assets/img/slide/slide6.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Une éducation de qualité</h2>
                <p class="animate__animated animate__fadeInUp">En plus de viser à une éducation intégrale des enfants et l’excellence de la réussite intellectuelle, il a pour but de former les jeunes dans la prise de conscience de leur devoir de citoyens et met un accent particulier sur l’éducation à la culture de la paix, de la démocratie et de la citoyenneté. En ce jour le collège compte 807 élèves, 53 enseignants et 5 membres de l’équipe de la direction.</p>
                <ul>
                    <li>
                        <a href="{{ asset('/apropos') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">
                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                        Lire plus..</a>
                    </li>
                </ul>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section>



  <br>
  <div class="container">
    <div class="alert alert-primary container" role="alert">
        <h5><strong>Flash info :</strong></h5>
        <marquee behavior="scroll">Protégez-vous et protégez les autres de la <a href="https://www.who.int/fr/emergencies/diseases/novel-coronavirus-2019/advice-for-public" class="alert-link">COVID-19</a> </marquee>
    </div>
    <h2><i class="icofont-home" style="color: #2453ec;"></i> <u> Acceuil</u></h2>
  </div>


        <section id="about" class="about">
            <div class="container">
                <div class="row no-gutters">

                <div class="col-lg-6 image-box">
                    <img src="assets/img/Equipe/pro.jpg" class="img-fluid" alt="">
                    <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox zoomin-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                </div>

                <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

                    <div class="section-title">
                        <h2><u>Mot du Provuseur:</u></h2>
                        <p style="color: black">"La rentrée scolaire 2020-2021 a été effective dès le 01 Octobre 2020 à partir de 7h30 au Lycée Marie Kə Tal avec un effectif de 836 élèves, 61 personnels enseignants et non enseignants. Au premier cycle nous avons en ce moment 2 classes de 6ème, 3 classes de 5ème  , 3 classes de 4ème et 3 classes de 3ème . Au second cycle on nous avons 2 classes de 2nde L, une classe de 2nde S, une classe de 1ère L, une classe de 1ère S, une classe de TA et une classes de TS ( TD et TC). </p>
                            <p style="color: black">Pour question de respect des mesures barrières contre la pandémie de la COVID 19, nous avons installé les dispositifs de lavage des mains partout au sein de l’établissement et aussi port des masques et distanciation sociale obligatoire à tous ceux qui entrent au Collège. Il y a également l’utilisation de thermo-flash a l’entrée pour prendre la température de tous ceux qui viennent au Collège.</p>
                            <p style="color: black">Je saisi également cette opportunité pour adresser mes remerciements très sincères à l’endroit de nos amis, anciens élèves, partenaires, bienfaiteurs et collaborateurs sans qui, toutes ces réalisations n’auraient été possibles. Je remercie tous ceux qui nous ont assistés d’une manière à une autre dans les épreuves ou aux bons moments. Que Dieu le tout puissant continue par nous garder pour la suite de cette lourde tâche qui est  l’éducation de qualité aux fils et aux filles du Tchad."</p>
                    </div>

                    <div class="icon-speak" data-aos="fade-down" data-aos-delay="100">
                        <h5 class="title" style="color: black"><b>FRERE NGAROBE SALKOUTOU</b></h5>
                    </div>

                </div>
                </div>

            </div>

         </section>

         <div class="container">
            <br>
            <h2><i class="icofont-calendar" style="color: #2453ec;"></i> <u> Actualité</u></h2>
            <h1><b>A la Une</b></h1>

            <div class="row portfolio-container">
                @if(count($actualites) >= 1 )
                  @foreach($actualites as $actualite)
                    @if(strlen($actualite->corps) >= 20)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap"   style="border: 1px solid #dbdbdb;padding:0px; margin-bottom:25px;">
                                <img src="{{ asset('storage/'.$actualite->image) }}" class="img-fluid" alt="">
                                <div class="portfolio-info card-body">
                                    <h4><b><u>{{$actualite->titre}}</u></b></h4>
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
          <br>

        </div>


    <!-- ======= Counts Section ======= -->
    <section class="counts section-bg">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
            <div class="count-box">
              <i class="icofont-hat-alt" style="color: #0933f1;"></i>
              <span data-toggle="counter-up">836</span>
              <p>Elèves</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="icofont-teacher" style="color: #ff0606;"></i>
              <span data-toggle="counter-up">50</span>
              <p>Enseignants</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="400">
            <div class="count-box">
              <i class="icofont-institution" style="color: #f310f3;"></i>
              <span data-toggle="counter-up">30</span>
              <p>Salles de Classe</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="600">
            <div class="count-box">
              <i class="icofont-badge" style="color: #faa200;"></i>
              <span data-toggle="counter-up">8</span>
              <p>Reponsables</p>
            </div>
          </div>

        </div>

      </div>
    </section>


    <section id="team" class="team"><!--Partenariat-->
        <div class="container" style="text-align: center">

          <div class="section-title">
            <h2><i class="icofont-flag" style="color: #f8211a;"></i> Les Partenariats</h2>
            <p>LCMKT était en partenariat avant avec Espagne et actuellement avec 5 pays qui sont : </p>
          </div>


          <div class="row">
            @if(count($partenaires) >= 1)
              @foreach($partenaires as $partenaire)
               <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" style="max-width: 14em">
                  <div class="member">
                    <div class="pic"><img src="{{ asset('storage/'.$partenaire->image) }}" class="img-fluid" alt=""></div>
                    <div class="member-info">
                      <h4>{{$partenaire->nom}}</h4>
                      <span>{{$partenaire->commentaire}}</span>
                    </div>
                  </div>
                </div>
                <br>
              @endforeach
            @else
            <h3>!</h3>
            @endif
          </div>

        </div>
      </section>

    <br><br>
   <div class="container" style="text-align: center">
    <div class="section-title">
        <h2> <i class="icofont-video-cam" style="color: #c308aa;"></i> Clips Lycée Collège Marie Kə Tal</h2>
        <p></p>
      </div>

      <div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
        <video src="https://youtu.be/rppKCfMGsQ4" controls>
           <code>video</code>.
        </video>
      </div>

   </div>
   <br><br>


        <div class="container">



        <br><br>
        <h2><u>Résultats des Examens</u></h2>
        <h1><b>Bac</b> 2019-2020</h1>
        <br>

        <table class="table table-bordered">
            <thead>
              <tr class="table-primary">
                <th scope="col">#</th>
                <th scope="col">Série A4</th>
                <th scope="col">Série D</th>
                <th scope="col">Série C</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Candidats inscrits</th>
                <td>10</td>
                <td>10</td>
                <td>100</td>
              </tr>
              <tr>
                <th scope="row">Admis</th>
                <td>10</td>
                <td>10</td>
                <td>10</td>
              </tr>
              <tr>
                <th scope="row">Refusés</th>
                <td>0</td>
                <td>0</td>
                <td>0</td>
              </tr>
              <tr>
                <th scope="row">Taux de réussite</th>
                <td>100%</td>
                <td>100%</td>
                <td>100%</td>
              </tr>
            </tbody>
          </table>


          <h1><b>les</b> Mentions</h1>
        <br>

        <table class="table table-bordered">
            <thead>
              <tr class="table-success">
                <th scope="col">Mention très Bien</th>
                <th scope="col">Mention Bien</th>
                <th scope="col">Mention assez Bien</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>2</td>
                <td>4</td>
                <td>7</td>
              </tr>
            </tbody>
          </table>

          <br>
          <hr style="color: blue;">

          <h1><b>BEPC/T</b> 2019-2020</h1>
        <br>

        <table class="table table-bordered">
            <thead>
              <tr class="table-primary">
                <th scope="col">Candits inscrits</th>
                <th scope="col">Admis</th>
                <th scope="col">Taux de réussite</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>100</td>
                <td>100</td>
                <td>100%</td>
              </tr>
            </tbody>
          </table>
        </div>

@endsection
