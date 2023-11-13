@extends('frontend.frontend_dashboard')
@section('main')

        <!-- banner -->
@include('frontend.home.banner')
<!-- banner- -->

<!-- category- -->
@include('frontend.home.category')
<!-- category- -->

        <!-- feature -->
        @include('frontend.home.feature')
        <!-- feature-->


        <!-- video-->
        @include('frontend.home.video')
        <!-- video -->

        <!-- deals -->
   @include('frontend.home.deals')
        <!-- deals- -->

        <!-- testimonial-->
       @include('frontend.home.testimonial')
        <!-- testimonial-->

        <!-- chooseus
 -->
       @include('frontend.home.chooseus')
        <!-- chooseus -->


        <!-- place-->
       @include('frontend.home.place')
        <!-- place -->


        <!-- team-->
       @include('frontend.home.team')
        <!-- team -->


        <!-- cta-section -->
      @include('frontend.home.cta')
        <!-- cta-section end -->


        <!-- news-section -->
        @include('frontend.home.news')
        <!-- news-section end -->


        <!-- download-section -->
        @include('frontend.home.download')
        <!-- download-section end -->

@endsection