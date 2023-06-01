@extends('layout.master')
@section('title','Accueil')
@section('content')

  <section data-anim-wrap class="masthead -type-7 js-mouse-move-container">
    <div class="masthead__bg bg-purple-1 rounded-16">
      <img src="{{asset('img/home-9/hero/bg.png')}}" alt="image">
    </div>

    <div class="container py-4">
      <div class="row y-gap-20 justify-between items-center">
        <div class="col-12">
          <div class="masthead__content">
            <h1 data-anim-child="slide-up delay-3" class="masthead__title text-white text-center mt-3">
              +10 opportunitées disponibles
            </h1>

            <div data-anim-child="slide-up delay-6">
              <div class="text-white text-center mt-20">Trending Search: Development, Business, Design, Merketing</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="layout-pt-md layout-pb-md">
    <div data-anim-wrap class="container">
      <div class="tabs -pills js-tabs">
        <div class="row y-gap-20 justify-between items-end">
          <div class="col-auto">

            <div class="sectionTitle ">

              <h2 class="sectionTitle__title ">Opportunitées récentes</h2>

              <p class="sectionTitle__text ">+10 opportunitées disponibles</p>

            </div>

          </div>
        </div>

        <div class="tabs__content pt-60 lg:pt-50 js-tabs-content">

          <div class="tabs__pane -tab-item-1 is-active">
            <div class="overflow-hidden js-section-slider" data-gap="30" data-slider-cols="xl-3 lg-3 md-2 sm-2">
              <div class="swiper-wrapper">

                @foreach ($offres as $index=>$offre)
                  <div class="swiper-slide">
                    <div data-anim-child="slide-up delay-{{$index}}">

                      <a href="{{route('opportunitiespagedetails',$offre->id)}}" class="coursesCard -type-1 ">
                        <div class="relative">
                          <div class="coursesCard__image overflow-hidden rounded-8">
                            
                            @if ($offre->logo)
                              <img class="w-1/1" src="{{asset('/storage/offrelogo/'.$offre->logo)}}" alt="image">
                            @else
                              <img class="w-1/1" src="{{asset('/offres.png')}}" alt="image">
                            @endif
                            
                            <div class="coursesCard__image_overlay rounded-8"></div>
                          </div>
                          <div class="d-flex justify-between py-10 px-10 absolute-full-center z-3">

                          </div>
                        </div>

                        <div class="h-100 pt-15">
                          <div class="d-flex items-center">
                            <div class="text-16 lh-1 fw-500 text-blue-100 ">{{$offre->titre}}</div>
                          </div>

                          <div class="text-17 lh-15 fw-500 text-black mt-10">{{$offre->poste}}</div>

                          <div class="d-flex x-gap-10 items-center pt-10">

                            <div class="d-flex items-center">
                            <div class="mr-8">
                                <i class="fa-sharp fa-solid fa-location-dot"></i>
                            </div>
                            <div class="text-14 lh-1 text-black">{{$offre->pays}} | {{$offre->lieu}}</div>
                            </div>

                            <div class="d-flex items-center">
                            <div class="mr-8">
                                <img src="{{asset('img/coursesCards/icons/3.svg')}}" alt="icon">
                            </div>
                            <div class="text-14 lh-1 text-black">{{$offre->niveau}}</div>
                            </div>

                        </div>
                          <div class="d-flex x-gap-10 items-center justify-between my-4 pt-10">

                            <div class="d-flex items-center">
                              <h3 class="lh-1">{{$offre->entreprise}}</h3>
                            </div>

                            <div class="d-flex items-center">
                              <div class="mr-8">
                                <img src="img/coursesCards/icons/2.svg" alt="icon">
                              </div>
                              <h5 class="text-14 lh-1 text-black">{{$offre->deadline}}</h5>
                            </div>

                          </div>

                        </div>
                      </a>

                    </div>
                  </div>
                @endforeach

              </div>


              <button class="section-slider-nav -prev -dark-bg-dark-2 -white -absolute size-70 rounded-full shadow-5 js-prev">
                <i class="fa-solid fa-arrow-left"></i>
              </button>

              <button class="section-slider-nav -next -dark-bg-dark-2 -white -absolute size-70 rounded-full shadow-5 js-next">
                <i class="fa-solid fa-arrow-right"></i>
              </button>

            </div>
          </div>

          <div class="col-lg-auto">
            <div class="d-inline-block">

              <a href="{{route('opportunitiespage')}}" class="button -icon -light-11 text-purple-1">
                Tout voir
                <i class="fa-solid fa-arrow-right text-13 ml-10"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="layout-pt-lg layout-pb-lg">
    <div class="container">
      <div class="row y-gap-20 justify-center text-center">
        <div class="col-auto">

          <div class="sectionTitle ">

            <h2 class="sectionTitle__title ">Comment ça marche ?</h2>

            <p class="sectionTitle__text ">Trouvez l'opportunité qui vous convient le mieux</p>

          </div>

        </div>
      </div>

      <div class="row y-gap-30 justify-between pt-60 lg:pt-40">

        <div class="col-xl-2 col-lg-3 col-md-6">
          <div class="d-flex flex-column items-center text-center">
            <div class="relative size-120 d-flex justify-center items-center rounded-full bg-light-4">
              <img src="img/home-3/works/1.svg" alt="image">
              <div class="side-badge">
                <div class="size-35 d-flex justify-center items-center rounded-full bg-dark-1 -dark-bg-purple-1">
                  <span class="text-14 fw-500 text-white">01</span>
                </div>
              </div>
            </div>
            <div class="text-17 fw-500 text-black mt-30">Parcourez les offres disponibles</div>
          </div>
        </div>


        <div class="col-auto xl:d-none">
          <div class="pt-30">
            <img src="img/misc/lines/1.svg" alt="icon">
          </div>
        </div>


        <div class="col-xl-2 col-lg-3 col-md-6">
          <div class="d-flex flex-column items-center text-center">
            <div class="relative size-120 d-flex justify-center items-center rounded-full bg-light-4">
              <img src="img/home-3/works/2.svg" alt="image">
              <div class="side-badge">
                <div class="size-35 d-flex justify-center items-center rounded-full bg-dark-1 -dark-bg-purple-1">
                  <span class="text-14 fw-500 text-white">02</span>
                </div>
              </div>
            </div>
            <div class="text-17 fw-500 text-black mt-30">Postulez à celui qui vous convient le mieux.</div>
          </div>
        </div>


        <div class="col-auto xl:d-none">
          <div class="pt-30">
            <img src="img/misc/lines/2.svg" alt="icon">
          </div>
        </div>


        <div class="col-xl-2 col-lg-3 col-md-6">
          <div class="d-flex flex-column items-center text-center">
            <div class="relative size-120 d-flex justify-center items-center rounded-full bg-light-4">
              <img src="img/home-3/works/3.svg" alt="image">
              <div class="side-badge">
                <div class="size-35 d-flex justify-center items-center rounded-full bg-dark-1 -dark-bg-purple-1">
                  <span class="text-14 fw-500 text-white">03</span>
                </div>
              </div>
            </div>
            <div class="text-17 fw-500 text-black mt-30">Vous recevrez un mail si vous êtes sélectionner.</div>
          </div>
        </div>


      </div>
    </div>
  </section>

@endsection