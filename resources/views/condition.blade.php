@extends('layout.compte.master')
@section('title','Connexion')
@section('content')
<section class="form-page js-mouse-move-container justify-center">


    <div class="form-page__content lg:py-50">
      <div class="container">
        <div class="row justify-center items-center">
          <div class="col-xl-6 col-lg-8">
            <div class="px-50 py-50 md:px-25 md:py-25 bg-white shadow-1 rounded-16">
              

              <form class="contact-form respondForm__form row y-gap-20 pt-30" method="POST" action="/savefichier">
                  {{ csrf_field() }}
                 
                  <input type="hidden" name="offre_id" value="{{request('id')}}">
                    
                  @foreach ($condition as $index=>$item)
                    <div class="col-12 d-flex flex-column">
                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{$item->nom}} </label>
                        <input type="file" class="form-control" name="file{{$index+1}}" placeholder="">
                        @if ($errors->has('file'.$index+1))
                            <div style="color: #f1416c !important">{{$errors->first('file'.$index+1)}} </div>
                        @endif
                    </div>
                  
                  @endforeach
                  
                
                
                <div class="col-12">
                  <button type="submit" name="submit" id="submit" class="button -md -dark-1 text-white fw-500 w-1/1">
                    Soumettre
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