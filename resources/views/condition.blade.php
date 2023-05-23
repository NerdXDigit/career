@extends('layout.compte.master')
@section('link')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('title','Postulez à l\'offre')
@section('content')
<section class="form-page js-mouse-move-container justify-center">


    <div class="form-page__content lg:py-50">
      <div class="container">
        <div class="row justify-center items-center">
          <div class="col-lg-8">
            <div class="px-50 py-50 md:px-25 md:py-25 bg-white shadow-1 rounded-16">

              <h2 class="w-100 text-center">Condition de soumission</h2>

              <form class="contact-form respondForm__form row y-gap-20 pt-30" enctype="multipart/form-data" method="POST" action="/savefichier">
                  {{ csrf_field() }}
                 
                  <input type="hidden" name="offre_id" value="{{request('id')}}">
                    
                  @foreach ($condition as $index=>$item)
                    <div class="col-12 d-flex flex-column">
                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{$item->nom}} </label>
                        <input type="file" class="form-control" required name="file{{$index+1}}" placeholder="">
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