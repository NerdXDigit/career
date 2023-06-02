@extends('layout.compte.master')
@section('title','Détails Opportunitées')
@section('content')

    <section data-anim="fade" class="breadcrumbs ">
        <div class="container">
        <div class="row">
            <div class="col-auto">
            <div class="breadcrumbs__content">

                <div class="breadcrumbs__item ">
                <a href="{{route('homepage')}}">Accueil</a>
                </div>

                <div class="breadcrumbs__item ">
                <a href="{{route('opportunitiespage')}}">Toutes les opportunitées</a>
                </div>

            </div>
            </div>
        </div>
        </div>
    </section>
    <div class="js-pin-container">
        <section class="page-header -type-6">
          <div class="page-header__bg bg-purple-1 bgbg" style="
          background-image:url({{asset('banner.jpg')}});
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          padding:0 !important;
          overflow:hidden !important;"></div>
          <div class="container">
            <div class="page-header__content">
              <div class="row y-gap-30 relative">
                <div class="col-xl-7 col-lg-8">

                  <div data-anim="slide-up delay-1">
                    <h1 class="text-30 lh-14 text-white pr-60 lg:pr-0">{{$offre->titre}}</h1>
                  </div>

                  <p class="col-xl-9 mt-20 text-white">{{$offre->poste}}</p>

                  <div class="d-flex x-gap-30 y-gap-10 items-center flex-wrap pt-20">

                    <div class="d-flex items-center text-white">
                        <h6 class="text-16 text-white">Pays/Lieu: {{$offre->pays}} - {{$offre->lieu}}</h6>
                    </div>

                    <div class="d-flex items-center text-white">
                        <h6 class="text-16 text-white ml-8">Niveau: {{$offre->niveau}}</h6>
                    </div>

                    <div class="d-flex items-center text-white">
                      <h6 class="text-16 text-white ml-8">Délai: {{$offre->deadline}}</h6>
                    </div>

                  </div>

                  <div class="d-flex items-center pt-20">
                    <h2 class=" lh-1 text-white">{{$offre->entreprise}}</h2>
                  </div>

                  <div class="d-flex items-center mt-4 pt-20">
                    <a href="{{route('conditionpage',$offre->id)}}" class="bg-white text-black p-3 px-4 rounded-4">Postulez</a>
                  </div>

                </div>

                <div class="courses-single-info js-pin-content">
                  
                </div>
              </div>
            </div>
          </div>
        </section>


        <section class="layout-pt-md layout-pb-md">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="page-nav-menu -line">
                  <div class="d-flex x-gap-30">
                    <div><a href="#overview" class="pb-12 page-nav-menu__link js-scroll-to-id is-active">Détails</a></div>
                  </div>
                </div>

                <div id="overview" class="pt-60 lg:pt-40 to-over">
                  <h4 class="text-18 fw-500">Description</h4>

                  <div class="show-more mt-30 js-show-more">
                    <div class="show-more__content">
                      <p class="">
                        {{$offre->description}}
                      </p>
                    </div>

                    <button class="show-more__button text-purple-1 fw-500 underline mt-30">Voir Plus</button>
                  </div>

                  <div class="mt-60">
                    <h4 class="text-20">Pièces jointes (Fichier à soumettre)</h4>
                    <ul class="ul-list y-gap-15 pt-30">
                        @foreach ($conditions as $condition)
                            <li style="color: black;"> {{$condition->nom}} </li>
                        @endforeach 
                    </ul>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </section>

      </div>
      <style>
        .bgbg::before{
          content: '';
          background-color:rgb(102 172 255 / 53%) !important;
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
        }
      </style>
@endsection