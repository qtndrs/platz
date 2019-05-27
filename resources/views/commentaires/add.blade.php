{{--
	resources/views/ressources/show.blade.php
	 --}}

	 <div class="post-send">
                    <div id="main-post-send">
                        <div id="title-post-send">Add your comment</div>
                        <form id="contact" method="get" action="{{route('add')}}">
                            <input name="_token" type="hidden" value="{{ csrf_token() }}">
                            <input id="user" name="user" type="hidden" value="2">
                            <input id="ressource" name="ressource" type="hidden" value="{{$ressource->id}}">
                            <fieldset>
                                <p><textarea id="body" name="body" maxlength="500" placeholder="Votre Message" tabindex="5" cols="30" rows="4"></textarea></p>
                            </fieldset>
                            <div style="text-align:center;"><input type="submit" name="envoi" value="Envoyer" id="btn"/></div>
                        </form>
                    </div>
                </div>
            </div>
