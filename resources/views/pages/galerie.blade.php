@extends('layouts.master',['title' => 'galérie'])

@section('contenu')

<!-- ======= Our Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="section-title">
      <h2> <i class="icofont-image" style="color: #18cf07;"></i> Vie au Lycée Collège Marie Kə Tal</h2>
      <p></p>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">Tout</li>
          <li data-filter=".filter-eleve">Elèves</li>
          <li data-filter=".filter-enseignat">Enseignants</li>
          <li data-filter=".filter-evenement">Evénements</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container">

        @foreach($galeries as $galerie)
            <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $galerie->type}}">
                <div class="portfolio-wrap">
                <img src="{{ asset('storage/'.$galerie->image) }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4>{{ $galerie->titre}}</h4>
                    <p>{{ $galerie->titre}}</p>
                    <div class="portfolio-links">
                    <a href="{{ asset('storage/'.$galerie->image) }}" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-eye"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="icofont-external-link"></i></a>
                    </div>
                </div>
                </div>
            </div>
        @endforeach

    </div>

  </div>
</section><!-- End Our Portfolio Section -->

@endsection
