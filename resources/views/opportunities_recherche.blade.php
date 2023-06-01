@extends('layout.master')
@section('title','Opportunitées')
@section('content')
<section class="layout-pt-lg layout-pb-lg mt-4">
    <div data-anim-wrap class="container">
        <div class="row y-gap-15 justify-between items-center mt-4">
            <div class="col-lg-6">

            <div class="sectionTitle ">

                <h2 class="sectionTitle__title ">Résultats</h2>

                {{-- <p class="sectionTitle__text ">10,000+ unique online course list designs</p> --}}

            </div>

            </div>

        </div>

        <div class="row y-gap-30 justify-center pt-50">

            @foreach ($offres as $index=>$offre)
                <div class="col-lg-4 col-md-6">
                <div data-anim-child="slide-up delay-1">

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
                                <img src="{{asset('img/coursesCards/icons/2.svg')}}" alt="icon">
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

    </div>
  </section>
@endsection