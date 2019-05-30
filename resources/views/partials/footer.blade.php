{{--
	resources/views/partials/footer.blade.php
	 --}}

<div id="main-container-footer">

	<div class="container">
	@if (\Session::has('success'))
		<div class="alert alert-success">
			<p>{{ \Session::get('success') }}</p>
		</div><br />
	 @endif
	 @if (\Session::has('failure'))
		<div class="alert alert-danger">
			<p>{{ \Session::get('failure') }}</p>
		</div><br />
	 @endif

	</div>

	<div class="container-footer">

					<div id="row-1f">
						<div class="text-row-1f"><span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">What is Platz</span><br>Platz is a blog showcasing hand-picked free themes, design stuff, free fonts and other resources for web designers.</div>
					</div>

					<div id="row-2f">
						<div class="text-row-2f"><span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">How does it work</span><br>Platz offers you all the latest freebies found all over the fourth corners without to pay.</div>
					</div>

					<div id="row-3f">
						<div class="text-row-3f"><span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">Get in touch!</span><br>Subscribe our RSS or follow us on Facebook, Google+, Pinterest or Dribbble to keep updated.</div>
					</div>

					<div id="row-4f">
						<div class="text-row-4f"><span style="font-weight:600;font-size:15px;color:#666;line-height:250%;text-transform:uppercase;letter-spacing:1.5px;">Newsletter</span><br>You will be informed monthly about the latest content avalaible.</div>

			<div id="main_tip_newsletter">
				{{--
					<form method="post" action="{{url('/')}}">
						@csrf
						<div class="row">
							<div class="col-md-4"></div>
								<div class="form-group col-md-2">
									<label for="Email">Email:</label>
									<input type="text" class="form-control" name="email">
								</div>
							</div>
						<div class="row">
							<div class="col-md-4"></div>
							<div class="form-group col-md-4">
								<button type="submit" class="btn btn-success">Submit</button>
							</div>
						</div>
					</form>
					--}}

					<form method="post" action="{{url('/')}}">
						@csrf
					<input type="text" name="email" id="tip_newsletter_input" list="newsletter" autocomplete=off required>
				</form>
			</div>
					</div>

	</div>
</div>

<div id="wrapper-copyright">
<div class="copyright">
		<div class="copy-text object">Copyright © 2016. Template by <a style="color:#D0D1D4;" href="https://dcrazed.com/">Dcrazed</a></div>

	<div class="wrapper-navbouton">
			<div class="google object">g</div>
			<div class="facebook object">f</div>
			<div class="linkin object">i</div>
			<div class="dribbble object">d</div>
		</div>
	</div>
</div>
