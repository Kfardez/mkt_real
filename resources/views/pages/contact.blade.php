@extends('layouts.master',['title' => 'contact'])

@section('contenu')

<section id="clients">

    <section id="cta" class="cta" style="background:linear-gradient(to bottom right, rgb(255, 235, 58),rgba(42, 99, 255, 0.815));">
        <div class="container" data-aos="zoom-in">
          <div class="row">
            <div class="col-lg-9 text-center text-lg-left">
              <h3 style="color: rgb(83, 82, 82)"><a href="{{ asset('/acceuil') }}" style="color: rgb(3, 124, 58)">Acceuil</a> / <u>Contact</u></h3>
              <p style="color: rgba(0, 0, 0, 0.959);">Pour plus d'informations et vos demandes particulières, Veuillez nous contacter à l'adresse suivante .</p>
            </div>
            <div class="col-lg-3 cta-btn-container image-center">
                <div class="col-lg-12 col-md-12 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">

                    <img src="assets/img/cont.png" class="img-fluid animated" alt="">
                  </div>
            </div>
          </div>

        </div>
      </section><!-- End Cta Section -->


    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2><i class="icofont-contacts" style="color: #f8211a;"></i> <u>Nous Contacter</u></h2>
        </div>

        <div class="row">

          <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Notre Adresse</h3>
              <p>Quartier résidentiel, Tchad, Koumra</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Notre Email</h3>
              <p>marieketal@gmail.com<br>marieketal@yahoo.com</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box ">
              <i class="bx bx-phone-call"></i>
              <h3>Contactez Nous</h3>
              <p>+235 63 88 01 08<br>+235 93 52 71 47</p>
            </div>
          </div>



          <br>
          @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
            <form action="{{ route('send.email') }}" method="POST" role="form">
              {{ csrf_field() }}
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Votre Nom"/>
                  @error('name')
                    <span class="text-danger"> {{ $message }} </span>
                  @enderror
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" />
                  @error('email')
                    <span class="text-danger"> {{ $message }} </span>
                  @enderror
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Votre suject"/>
                    @error('subject')
                      <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
              <div class="form-group">
                <textarea class="form-control" name="content" rows="7"  placeholder="Message"></textarea>
                @error('content')
                    <span class="text-danger"> {{ $message }} </span>
                @enderror
              </div>
              <div class="text-center"><button type="submit" class="btn btn-primary" name="send" value="send"><i class="icofont-paper-plane" style="color: #ffffff;"> </i>Envoyer</button></div>
            </form>
          </div>
          <!--localisation-->


        </div>

      </div>
    </section>

</section>


@endsection
