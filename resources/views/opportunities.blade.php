@extends('layout.master')
@section('title','Opportunitées')
@section('content')
    <section data-anim-wrap class="masthead -type-2">
        <div class="masthead__bg">
            <div class="bg-image js-lazy" data-bg="img/home-3/masthead/bg.png"></div>
        </div>

        <div class="container">
            <div class="row y-gap-50 justify-center items-center">
                <div class="col-12">
                    <div class="masthead__content mb-4">
                        <div data-anim-child="slide-up delay-2" class="masthead__subtitle fw-500 text-green-1 text-center text-17 lh-15">
                        +10 opportunitées disponibles
                        </div>
                    </div>

                    <form action="" class="contact-form respondForm__form row">
                        <div class="col-md-10">
                            <input type="text" class="text-white" placeholder="Mot clé (ex: poste, lieu, entreprise, diplôme, titre)">
                        </div>
                        <div class="col-md-2 d-flex justify-center">
                            <button class="button -dark-1 text-white fw-500 p-3">Rechercher</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </section>
@endsection