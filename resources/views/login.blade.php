@extends('layout.compte.master')
@section('title','Connexion')
@section('content')
<section class="form-page js-mouse-move-container">
    <div class="form-page__img bg-dark-1">
      <div class="form-page-composition">
        <h1 class="text-white mt-4">Se Connecter</h1>
      </div>
    </div>

    <div class="form-page__content lg:py-50">
      <div class="container">
        <div class="row justify-center items-center">
          <div class="col-xl-6 col-lg-8">
            <div class="px-50 py-50 md:px-25 md:py-25 bg-white shadow-1 rounded-16">
              <h3 class="text-30 lh-13 text-center">Connexion</h3>
              <p class="mt-10 text-center">Vous n'avez pas un compte ? <a href=" {{route('registerpage')}} " class="text-purple-1">S'inscrire gratuitement</a></p>

              <form class="contact-form respondForm__form row y-gap-20 pt-30" method="POST" action="{{ route('loginaction') }}">
                  {{ csrf_field() }}
                <div class="col-12">
                  <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Email</label>
                  <input type="email" name="email" placeholder="Email">
                    @if ($errors->has('email'))
                      <div style="color: #f1416c !important">{{$errors->first('email')}} </div>
                    @endif
                </div>
                <div class="col-12">
                  <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">Mot de passe</label>
                  <input type="password" name="password" placeholder="Mot de passe">
                    @if ($errors->has('password'))
                      <div style="color: #f1416c !important">{{$errors->first('password')}} </div> 
                    @endif
                </div>
                <div class="col-12">
                  <button type="submit" name="submit" id="submit" class="button -md -dark-1 text-white fw-500 w-1/1">
                    Se Connecter
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