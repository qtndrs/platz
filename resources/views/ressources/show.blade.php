{{--
	resources/views/ressources/show.blade.php
	 --}}

@extends('templates.homepage')

@section ('content')
<!-- PORTFOLIO -->
<div class="title-item">
	<div class="title-icon"></div>
		<div class="title-text">{{ $ressource -> titre }} </div>
		<div class="title-text-2">{{ $ressource -> created_at }} by {{$ressource->user->name}}</div> {{-- voir le user comment le recuperer--}}
</div>
<div class="work">
<figure class="white">
<img src="{{ asset('img/' . $ressource->image) }}" alt=""/></figure>

			<!-- Aside -->
<div class="wrapper-text-description">

	<div class="wrapper-file">
			<div class="icon-file"><img src="{{ asset('img/' . $ressource->categorie->icone) }}" alt="" width="21" height="21"/></div> {{-- voir catégorie comment la recuperer--}}
				<div class="text-file">{{$ressource->categorie->nom}} </div>
		</div>

		<div class="wrapper-weight">
			<div class="icon-weight"><img src="{{ asset('img/icon-weight.svg') }}" alt="" width="20" height="23"/></div>
				<div class="text-weight">23 Mo</div>
		</div>

		<div class="wrapper-desc">
			<div class="icon-desc"><img src="{{ asset('img/icon-desc.svg') }}" alt="" width="24" height="24"/></div>
				<div class="text-desc">{{ $ressource -> texteSuite }}</div>
		</div>

		<div class="wrapper-download">
			<div class="icon-download"><img src="{{ asset('img/icon-download.svg') }}" alt="" width="19" height="26"/></div>
				<div class="text-download"><a href="#"><b>Download</b></a></div>
		</div>
									<!-- more from categorie -->
		<div class="wrapper-morefrom">
			<div class="text-morefrom">More from {{$ressource->categorie->nom}}</div>
				<div class="image-morefrom">

 				@include('ressources.indexByCategorie')
				</div>
		</div>

</div>

				<div class="post-reply">
						<div id="title-post-send">
								<hr/><h2>Your comments</h2>
						</div>


	</div>
							<!-- comment with ajax -->
						<div class="post-reply">
								<div class="image-reply-post"></div>
								<div class="name-reply-post">Igor vlademir</div>
								<div class="text-reply-post">Awesome mockup, i like it very much ! It will help me for my website i was looking for since few days. Thank you a lot.</div>
						</div>

							<div class="post-reply-2">
								<div class="image-reply-post-2"></div>
								<div class="name-reply-post-2">Nathan Shaw</div>
								<div class="text-reply-post-2">Well done ! I like the way you did it. Awesome ! </div>
						</div>

					<div class="post-send">
							<div id="main-post-send">
										<div id="title-post-send">Add your comment</div>
				<form id="contact" method="post" action="/onclickprod/formsubmit_op.asp">
					<fieldset>
					<p><textarea id="message" name="message" maxlength="500" placeholder="Votre Message" tabindex="5" cols="30" rows="4"></textarea></p>
				</fieldset>
				<div style="text-align:center;"><input type="submit" name="envoi" value="Envoyer" /></div>
				</form>
				</div>
				</div>
				</div>

@stop
