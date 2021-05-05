<!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-3 footer-info">
            <h3><i class="icofont-instrument" style="color: #ffffff;"> </i>Marie Kə Tal</h3>
            <p>
              Quartier Résidentiel <br>
              Koumra / Tchad<br><br>
              <strong>BP :</strong> 14<br>
              <strong>Phone :</strong> +235 63 88 01 08 / 93 52 71 47<br>
              <strong>Email :</strong> marieketal@gmail.com<br>
            </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-3 footer-links">
            <h4>Liens Importants</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ asset('/acceuil') }}">Acceuil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ asset('/apropos') }}">A propos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ asset('/actualite') }}">Actualité</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="{{ asset('/reglement') }}">Règlement intérieur</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="{{ asset('/organisation') }}">Organisation & Rés.Humaines</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ asset('/galerie') }}">Galérie</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ asset('/inscription') }}">Postuler</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ asset('/contact') }}">Contact</a></li>
              <li ><i  class="bx bx-chevron-right"></i><a href="{{asset('/inscription')}}">Connexion</a></li>
              <li ><i  class="bx bx-chevron-right"></i><a href="{{asset('/inscription')}}">Inscription</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-3 footer-newsletter">
            <h4>Notre Newsletter</h4>
            <p>Abonnez-vous à notre newsletter pour plus d'informations</p>
            <form action="{{ url('/newsletter') }}" method="post">
                {{ csrf_field() }}
              <input type="email" name="email" placeholder="Votre@gmail.com"><input type="submit" value="Souscrire">
            </form>

            <br>
            <img class="col-4" src="assets/img/favicon.png" alt="logo" class="img-thumbnail" style="max-width: 10em;">
            <p>Le Lycée Collège Marie Kə Tal</p>
            <br>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        2021 &copy; <strong><span>Mari Kə Tal</span></strong>
      </div>
      <div class="credits">
        Designed & Developed by <a href="mailto:djiraibesr@gmail.com">Salkutu Rodriguez</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
