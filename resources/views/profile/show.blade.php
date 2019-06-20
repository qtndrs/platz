{{--
	resources/views/auth/login.blade.php
	 --}}

@extends('layouts.app')

@section('titre', 'Login')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div >

                </div>
                <div class="card-header">{{ __('My Profile') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('voyager.login') }}">
                        @csrf
                        <div style="text-align:center;">
                          <img class="rounded-circle" src="{{ Voyager::image( Auth::user()->avatar) }}" />
                        </div>
                        <div class="form-group col-md-12 offset-md-4"  >
                              <form  action="{{route('avatar')}}" method="post" enctype="multipart/form-data">
                               @csrf
                               <div class="col-md-4 col-form-label text-md-right">
                                   <input class="btn btn-primary" type="file" class="form-control-file" name="avatar" id="avatarFile" value="Télécharger un avatar" /><br>
                                   <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                               </div>
                               <button type="submit" class="btn btn-primary">Submit</button>
                           </form>
                            </div>

                            <div >
                              <div class="form-group row">
                                  <div class="col-md-8 offset-md-4">
                                          Votre email : {{auth::user()->email}}
                                  </div>
                              </div>
                              <div class="form-group row">
                              <div class="col-md-8 offset-md-4">
                                    Votre nom : {{auth::user()->name}}
                              </div>
                              </div>

                              <div class="form-group row mb-0">
                                  <div class="col-md-8 offset-md-4">

                                      @if (Route::has('password.request'))
                                          <a class="btn btn-link" href="{{ route('password.request') }}">
                                              Changer mon mot de passe
                                          </a>
                                      @endif
                                  </div>
                              </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
