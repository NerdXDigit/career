@extends('layout.master')
@section('title','Connexion')
@section('content')
<section class="form-page">
    <div class="form-page__img bg-dark-1">
      <div class="form-page-composition">
        <h1 class="text-white mt-4">S'inscrire</h1>
      </div>
    </div>

    <div class="form-page__content lg:py-50">
      <div class="container">
        <div class="row justify-center items-center">
          <div class="col-xl-8 col-lg-9">
            <div class="px-50 py-50 md:px-25 md:py-25 bg-white shadow-1 rounded-16">
              <h3 class="text-30 lh-13 text-center">Inscription</h3>
              <p class="mt-10 text-center">Vous avez déjà un compte ? <a href=" {{route('loginpage')}} " class="text-purple-1">Se Connecter</a></p>

              <form class="contact-form respondForm__form row y-gap-20 pt-30" action="#">
                <div class="col-lg-6">
                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Nom</label>
                    <input type="text" name="nom" placeholder="Nom">
                </div>
                <div class="col-lg-6">
                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Prénoms</label>
                    <input type="text" name="prenom" placeholder="Prénoms">
                </div>
                <div class="col-lg-6">
                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Email</label>
                    <input type="email" name="email" placeholder="Email">
                </div>
                <div class="col-lg-6">
                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Téléphone</label>
                    <input type="text" name="phone" placeholder="Téléphone">
                </div>
                <div class="col-lg-12">
                    <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Mot de passe</label>
                    <input type="password" name="password" placeholder="Mot de passe">
                </div>
                <div class="col-12">
                  <button type="submit" name="submit" id="submit" class="button -md -dark-1 text-white fw-500 w-1/1">
                    S'inscrire
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection