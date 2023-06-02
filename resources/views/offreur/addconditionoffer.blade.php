@extends('offreur.partial.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Ajouter une condition</h4>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic Layout -->
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Ajouter une conditon</h5>
          </div>
          <div class="card-body">
            @if (Session::has('status'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    {{Session::get('status')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                    
                  
              @endif
            <form action="/espace/offreur/savecondition" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="offre_id" value="{{request('id')}}">

                

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Nom</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nom" id="basic-default-name" placeholder="" value="{{old('nom')}}">
                  @if ($errors->has('nom'))
                    <div style="color: #f31818 !important" class="text-muted fs-7 danger">{{$errors->first('nom')}} </div> 
                  @endif
                </div>
              </div>



              
              {{-- <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-message">Description</label>
                <div class="col-sm-10">
                  <textarea id="basic-default-message" class="form-control" name="description" placeholder="" aria-label="" aria-describedby="basic-icon-default-message2">{{old('description')}}</textarea>
                  @if ($errors->has('description'))
                  <div style="color: #f31818 !important" class="text-muted fs-7 danger">{{$errors->first('description')}} </div> 
                  @endif
                </div>
              </div> --}}
              <div class="row justify-content-end">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection
