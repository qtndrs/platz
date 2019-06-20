@extends ('templates.homepage')

@section('titre')
    Profil de l'utilisateur
@stop

@section ('content')
    <div>
        <div>
            <section>
                <div>
                                <div class="profile-header-container">
                                  <figure>
                                    <img src="{{ Voyager::image( Auth::user()->avatar ) }}" alt="avatar" style="height: auto; width:auto; margin: 50px;"/><br/>
                                </figure>
                   </div>
               </div>


                  <div class="row justify-content-center">
                <form action="{{route('avatar')}}" method="get" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="file" class="form-control-file" name="avatar" id="avatarFile" aria-describedby="fileHelp">
                        <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>


                  <div>
                    Votre email : {{auth::user()->email}}
                  </div>

                  <div>
                    Votre nom : {{auth::user()->name}}
                  </div>


                </div>

                <div>
                    <a class="btn btn-primary" href="{{url('/password/reset')}}">Changer votre mot de passe</a></br>
                </div>


            </section>
        </div>
    </div>
@endsection
