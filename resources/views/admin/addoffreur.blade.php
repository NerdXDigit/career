@extends('admin.partial.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Ajouter un offreur</h4>

    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
      <!-- Basic Layout -->
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">Ajouter un offreur</h5>
          </div>
          <div class="card-body">
            @if (Session::has('status'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    {{Session::get('status')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                    
                  
              @endif
            <form action="/espace/admin/saveoffreur" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-name">Nom</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nom" id="basic-default-name" placeholder="" value="{{old('nom')}}">
                  @if ($errors->has('nom'))
                    <div style="color: #f31818 !important" class="text-muted fs-7 danger">{{$errors->first('nom')}} </div> 
                  @endif
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">Prenoms</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="prenoms" id="basic-default-company" placeholder="" value="{{old('prenoms')}}">
                  @if ($errors->has('prenoms'))
                  <div style="color: #f31818 !important" class="text-muted fs-7 danger">{{$errors->first('prenoms')}} </div>
                  @endif
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">Email</label>
                <div class="col-sm-10">
                  <input  autocomplete="off" type="text" class="form-control" name="email" id="basic-default-company" placeholder="" value="{{old('email')}}">
                  @if ($errors->has('email'))
                  <div style="color: #f31818 !important" class="text-muted fs-7 danger">{{$errors->first('email')}} </div> 
                  @endif
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">Telephone</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="telephone"  id="basic-default-company" placeholder="" value="{{old('telephone')}}">
                  @if ($errors->has('telephone'))
                  <div style="color: #f31818 !important" class="text-muted fs-7 danger">{{$errors->first('telephone')}} </div> 
                  @endif
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">Entreprise</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="entreprise"  id="basic-default-company" placeholder="" value="{{old('entreprise')}}">
                  @if ($errors->has('entreprise'))
                  <div style="color: #f31818 !important" class="text-muted fs-7 danger">{{$errors->first('entreprise')}} </div> 
                  @endif
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">Password</label>
                <div class="col-sm-10">
                  <input  autocomplete="off" type="password" class="form-control" name="password" id="basic-default-company" placeholder="" value="">
                  @if ($errors->has('password'))
                    <div style="color: #f31818 !important" class="text-muted fs-7 danger">{{$errors->first('password')}} </div>
                  @endif
                </div>
              </div>

              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="basic-default-company">Comfirmer Password</label>
                <div class="col-sm-10">
                  <input  autocomplete="off" type="password" class="form-control" name="comfirmpassword" id="basic-default-company" placeholder="" value="">
                  @if ($errors->has('comfirmpassword'))
                    <div style="color: #f31818 !important" class="text-muted fs-7 danger">{{$errors->first('comfirmpassword')}} </div>
                  @endif
                </div>
              </div>

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
