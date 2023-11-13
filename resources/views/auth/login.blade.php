@extends('frontend.frontend_dashboard')
   @section('main')
   @section('title')
  User Login | 
@endsection

  <!--Page Title-->
        <section class="page-title-two bg-color-1 centred">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url({{ asset('frontend/assets/images/shape/shape-9.png') }});"></div>
                <div class="pattern-2" style="background-image: url({{ asset('frontend/assets/images/shape/shape-10.png') }});"></div>
            </div>
            <div class="auto-container">
                <div class="content-box clearfix">
                    <h1>S'inscrire</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Accueil</a></li>
                        <li>S'inscrire</li>
                    </ul>
                </div>
            </div>
        </section>

        <!--End Page Title-->
<!-- Inclure jQuery -->
<!-- Alert for successful login -->
@if(session('alert-type'))
    <div class="alert alert-{{ session('alert-type') }} alert-dismissible fade show position-fixed" role="alert" style="top: 20px; right: 20px; z-index: 9999;">
        {{ session('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

        <!-- ragister-section -->
        <section class="ragister-section centred sec-pad">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-8 col-lg-12 col-md-12 offset-xl-2 big-column">
                        <div class="sec-title">
                             
                        </div>
                        <div class="tabs-box">
                            <div class="tab-btn-box">
                                <ul class="tab-btns tab-buttons centred clearfix">
                                    <li class="tab-btn active-btn" data-tab="#tab-1">Connexion</li>
                                    <li class="tab-btn" data-tab="#tab-2">S'inscrire</li>
                                </ul>
                            </div>
    <div class="tabs-content">
        <div class="tab active-tab" id="tab-1">
            <div class="inner-box">
                <h4>Connexion</h4>
                <form action="{{ route('login') }}" method="post" class="default-form">
               @csrf

                    <div class="form-group">
                        <label>Courriel/Nom/Téléphone </label>
                        <input type="text" name="login" id="login" required="">
                    </div>
                     
                    <div class="form-group">
                        <label>Mot de passe</label>
                        <input type="password" name="password" id="password" required="">
                    </div>

                    <div class="form-group message-btn">
                        <button type="submit" class="theme-btn btn-one">Connexion</button>
                    </div>
                </form>
                <div class="othre-text">
                    <p>Avez vous un compte? <a href="signup.html">S'inscrire Maintenant</a></p>
                </div>
            </div>
        </div>
        <div class="tab" id="tab-2">
            <div class="inner-box">
                <h4>S'inscrire </h4>
               
                <form action="{{ route('register') }}" method="post" class="default-form">
                    @csrf

                    <div class="form-group">

                        <label>Nom d'utilisateur</label>
                        <input type="text" name="name" id="name" required="">
                    </div>
                    <div class="form-group">
                        <label> Adresse Email</label>
                        <input type="email" name="email" id="email" required="">
                    </div>
                    <div class="form-group">
                        <label>Mot de Passe</label>
                        <input type="password" name="password" id="password" required="">
                    </div>

                     <div class="form-group">
                        <label>Confirmer le mot de passe</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" required="">
                    </div>

                    <div class="form-group message-btn">
                        <button type="submit" class="theme-btn btn-one">S'inscrire</button>
                    </div>
                </form>
                <div class="othre-text">
                    <p>Avez vous un compte? <a href="signup.html">S'inscrire Maintenant</a></p>
                </div>
            </div>
        </div>
    </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ragister-section end -->

<!-- Inclure jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Inclure Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- subscribe-section -->
        <section class="subscribe-section bg-color-3">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                        <div class="text">
                        <span>S'abonner</span>
                       <h2>Inscrivez-vous à notre lettre d'information pour recevoir les dernières nouvelles et offres.</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-column">
                        <div class="form-inner">
                            <form action="contact.html" method="post" class="subscribe-form">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Enter your email" required="">
                                    <button type="submit">S'abonner</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subscribe-section end -->
<!-- Inclure jQuery -->
<script>
    $(document).ready(function(){
        // Fermer l'alerte automatiquement après 5 secondes (5000 millisecondes)
        $(".alert").delay(5000).slideUp(300, function(){
            $(this).alert('close');
        });
    });
</script>
          @endsection