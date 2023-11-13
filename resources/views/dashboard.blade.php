@extends('frontend.frontend_dashboard')
@section('main')


   <!--Page Title-->
        <section class="page-title centred" style="background-image: url({{ asset('frontend/assets/images/background/page-title-5.jpg') }});">
            <div class="auto-container">
                <div class="content-box clearfix">
                <h1>Profil utilisateur </h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Accueil</a></li>
                        <li>Profil utilisateur </li>
                    </ul>
                </div>
            </div>
        </section>
        <!--End Page Title-->


        <!-- sidebar-page-container -->
        <section class="sidebar-page-container blog-details sec-pad-2">
            <div class="auto-container">
                <div class="row clearfix">
                    



        @php

            $id = Auth::user()->id;
            $userData = App\Models\User::find($id);

        @endphp




        <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
            <div class="blog-sidebar">
              <div class="sidebar-widget post-widget">
                    <div class="widget-title">
                        <h4>Profil utilisateur </h4>
                    </div>
                    <div class="post-inner">
                        <div class="post">
                            <figure class="post-thumb"><a href="blog-details.html">
       <img src="{{ (!empty($userData->photo)) ? url('upload/user_images/'.$userData->photo) : url('upload/no_image.jpg') }}" alt=""></a></figure>
        <h5><a href="blog-details.html">{{ $userData->name }} </a></h5>
         <p>{{ $userData->email }} </p>
                        </div> 
                    </div>
                </div> 
       
        <div class="sidebar-widget category-widget">
            <div class="widget-title">
                 
            </div>
           

        @include('frontend.dashboard.dashboard_sidebar')


          </div> 
                         
                        </div>
                    </div>




  <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="blog-details-content">
                            <div class="news-block-one">
                                <div class="inner-box">
                                    
                                    <div class="lower-content">
                                        <h3>Inclure l'animation dans votre système de conception.</h3>
                                       
                                      
          


<div class="row">
<div class="col-lg-4">
    <div class="card-body" style="background-color: #1baf65;">
    <h1 class="card-title" style="color: white; font-weight: bold;">0</h1>
    <h5 class="card-text"style="color: white;"> Propriétés approuvées</h5>
    
  </div>
</div>

<div class="col-md-4">
    <div class="card-body" style="background-color: #ffc107;">
    <h1 class="card-title" style="color: white; font-weight: bold; ">0</h1>
    <h5 class="card-text"style="color: white;"> Propriétés en attente d'approbation</h5>
    
  </div>
</div>


<div class="col-md-4">
    <div class="card-body" style="background-color: #002758;">
    <h1 class="card-title" style="color: white; font-weight: bold;">0</h1>
    <h5 class="card-text"style="color: white; "> Propriétés rejetées</h5>
    
  </div>
</div>
    
</div> 

                                    </div>
                                </div>
                            </div>
                             
                            
                        </div>


    <div class="blog-details-content">
                            <div class="news-block-one">
                                <div class="inner-box">
                                    
                                    <div class="lower-content">
                                        <h3>Journaux d'activité</h3>
                                      <hr>
                                      
          


 

                                    </div>
                                </div>
                            </div>
                             
                            
                        </div>






                    </div> 


                </div>
            </div>
        </section>
        <!-- sidebar-page-container -->

        <!-- subscribe-section -->
        <section class="subscribe-section bg-color-3">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                        <div class="text">
                            <span>S'abonner</span>
                            <h2>Inscrivez-vous à notre newsletter pour recevoir les dernières nouvelles et offres.</h2>
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






@endsection