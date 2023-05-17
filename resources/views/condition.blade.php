@extends('layout.master')
@section('title','Connexion')
@section('content')
<section class="form-page js-mouse-move-container">


    <div class="form-page__content lg:py-50">
      <div class="container">
        <div class="row justify-center items-center">
          <div class="col-xl-6 col-lg-8">
            <div class="px-50 py-50 md:px-25 md:py-25 bg-white shadow-1 rounded-16">
              

              <form class="contact-form respondForm__form row y-gap-20 pt-30" method="POST" action="/savefichier">
                  {{ csrf_field() }}
                 
                  <input type="hidden" name="offre_id" value="{{request('id')}}">
                  @php
                        $i = 1
                    @endphp
                  @foreach ($condition as $item)
                    <div class="col-12">
                        <label class="text-16 lh-1 fw-500 text-dark-1 mb-10">{{$item->nom}} {{$i}}</label>
                        <input type="file" name="file{{$i}}" placeholder="">
                        @if ($errors->has('file'.$i))
                            <div style="color: #f1416c !important">{{$errors->first('file'.$i)}} </div>
                        @endif
                    </div>
                    @php
                    $i++
                    @endphp
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