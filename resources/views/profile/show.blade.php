@extends ('templates.homepage')

@section('titre')
    Profil de l'utilisateur
@stop

@section ('content')
    <div>
        <div>
            <section>
                <div>

                  <figure>
                      <img src="{{ Voyager::image( Auth::user()->avatar ) }}" alt="avatar" style="height: auto; width:auto; margin: 50px;"/><br/>
                  </figure>

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
