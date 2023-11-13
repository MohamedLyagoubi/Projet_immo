<header class="main-header">
            <!-- header -->
            <div class="header-top">
                <div class="top-inner clearfix">
                    <div class="left-column pull-left">
                        <ul class="info clearfix">
                            <li><i class="far fa-map-marker-alt"></i>Paris 75000 Cedex</li>
                            <li><i class="far fa-clock"></i>Lun -  Sam  10.00 - 18.00</li>
                            <li><i class="far fa-phone"></i><a href="tel:+33 07 08 78 00">+33 07 08 78 00</a></li>
                        </ul>
                    </div>
                    <div class="right-column pull-right">
                        <ul class="social-links clearfix">
                            <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="index.html"><i class="fab fa-vimeo-v"></i></a></li>
                        </ul>

          @auth
        <div class="sign-box">
        <a href="{{ route('dashboard') }}"><i class="fas fa-user"></i>Tableau de bord</a>
            <a href="{{ route('user.logout') }}"><i class="fas fa-user"></i>Déconnexion</a>
        </div>

    
        <div class="sign-box">
            <a href="{{ route('login') }}"><i class="fas fa-user"></i>Connexion</a>
        </div>

        
    @endauth         
                        


                    </div>
                </div>
            </div>
<!-- header-lower -->
<div class="header-lower">
<div class="outer-box">
<div class="main-box">
<div class="logo-box">
    <figure class="logo"><a href="index.html"><img src="{{ asset('frontend/assets/images/logo.png') }}" alt=""></a></figure>
</div>
<div class="menu-area clearfix">
    <!--Mobile Navigation Toggler-->
    <div class="mobile-nav-toggler">
        <i class="icon-bar"></i>
        <i class="icon-bar"></i>
        <i class="icon-bar"></i>
    </div>
    <nav class="main-menu navbar-expand-md navbar-light">
        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
            <ul class="navigation clearfix">
            <li class="current dropdown"><a href="index.html"><span>Accueil</span></a>
                    <ul>
                        <li><a href="index.html">Accueil principal</a></li>
                        <li><a href="index-2.html">Maison moderne</a></li>
                        <li><a href="index-3.html">Carte d'accueil</a></li>
                        <li><a href="index-4.html">Demi-carte d'accueil</a></li>
                        <li><a href="index-5.html">Agent d'accueil</a></li>
                        <li><a href="index-onepage.html">Accueil </a></li>
                        <li><a href="index-rtl.html">Accueil RTL</a></li>
                        <li class="dropdown"><a href="index.html">Style d'en-tête</a>
                            <ul>
                                <li><a href="index.html">Style d'en-tête 01</a></li>
                                <li><a href="index-2.html">Style d'en-tête 02</a></li>
                                <li><a href="index-3.html">Style d'en-tête 03</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"><a href="index.html"><span>Liste</span></a>
                    <ul>
                        <li><a href="agents-list.html">Liste des agents</a></li>
                        <li><a href="agents-grid.html">Grille des agents</a></li>
                        <li><a href="agents-details.html">Détails de l'agent</a></li>
                    </ul>
                </li> 
                <li class="dropdown"><a href="index.html"><span>Propriété</span></a>
                    <ul>
                        <li><a href="property-list.html">Liste des propriétés</a></li>
                        <li><a href="property-grid.html">Grille des propriétés</a></li>
                        <li><a href="property-list-2.html">Vue complète de la liste des propriétés</a></li>
                        <li><a href="property-grid-2.html">Vue complète de la grille des propriétés</a></li>
                        <li><a href="property-list-3.html">Demi-vue de la liste des propriétés</a></li>
                        <li><a href="property-grid-3.html">Demi-vue de la grille des propriétés</a></li>
                        <li><a href="property-details.html">Détails de la propriété 01</a></li>
                        <li><a href="property-details-2.html">Détails de la propriété 02</a></li>
                        <li><a href="property-details-3.html">Détails de la propriété 03</a></li>
                        <li><a href="property-details-4.html">Détails de la propriété 04</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="index.html"><span>Pages</span></a>
                    <div class="megamenu">
                        <div class="row clearfix">
                            <div class="col-xl-4 column">
                                <ul>
                                    <li><h4>Pages</h4></li>
                                    <li><a href="about.html">À propos de nous</a></li>
                                    <li><a href="services.html">Nos services</a></li>
                                    <li><a href="faq.html">Page FAQ</a></li>
                                    <li><a href="pricing.html">Tableau des tarifs</a></li>
                                    <li><a href="compare-roperties.html">Comparer les propriétés</a></li>
                                    <li><a href="categories.html">Page Catégories</a></li>
                                    <li><a href="career.html">Opportunité de carrière</a></li>
                                    <li><a href="testimonials.html">Témoignages</a></li
                                </ul>
                            </div>
                            <div class="col-xl-4 column">
                                <ul>
                                <li><h4>Pages</h4></li>
                                    <li><a href="gallery.html">Notre galerie</a></li>
                                    <li><a href="profile.html">Mon profil</a></li>
                                    <li><a href="signin.html">Se connecter</a></li>
                                    <li><a href="signup.html">Inscription</a></li>
                                    <li><a href="error.html">404</a></li>
                                    <li><a href="agents-list.html">Liste des agents</a></li>
                                    <li><a href="agents-grid.html">Grille des agents</a></li>
                                    <li><a href="agents-details.html">Détails de l'agent</a></li>
                                </ul>
                            </div>
                            <div class="colonne col-xl-4">
                                <ul>
                                    <li><h4>Pages</h4></li>
                                    <li><a href="blog-1.html">Blog 01</a></li>
                                    <li><a href="blog-2.html">Blog 02</a></li>
                                    <li><a href="blog-3.html">Blog 03</a></li>
                                    <li><a href="blog-details.html">Détails du blog</a></li>
                                    <li><a href="agency-list.html">Liste des agences</a></li>
                                    <li><a href="agency-grid.html">Grille d'agence</a></li>
                                    <li><a href="agency-details.html">Détails de l'agence</a></li>
                                    <li><a href="contact.html">Contactez-nous</a></li>
                                </ul>
                            </div>                                   
                        </div>                                        
                    </div>
                </li> 
                <li class="dropdown"><a href="index.html"><span>Agence</span></a>
                    <ul>
                        <li><a href="agency-list.html">Liste des agences</a></li>
                        <li><a href="agency-grid.html">Grille d'agence</a></li>
                        <li><a href="agency-details.html">Détails de l'agence</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="index.html"><span>Blog</span></a>
                    <ul>
                        <li><a href="blog-1.html">Blog 01</a></li>
                        <li><a href="blog-2.html">Blog 02</a></li>
                        <li><a href="blog-3.html">Blog 03</a></li>
                        <li><a href="blog-details.html">Détails du blog</a></li>
                    </ul>
                </li>
                <li><a href="contact.html"><span>Contacte</span></a></li> 
            </ul>
        </div>
    </nav>
</div>
<div class="btn-box">
<a href="index.html" class="theme-btn btn-one"><span>+</span>Ajouter une annonce</a>
</div>
</div>
</div>
</div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="outer-box">
                    <div class="main-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="index.html"><img src="{{ asset('frontend/assets/images/logo.png') }}" alt=""></a></figure>
                        </div>
                        <div class="menu-area clearfix">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        <div class="btn-box">
                        <a href="index.html" class="theme-btn btn-one"><span>+</span>Ajouter une annonce</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>