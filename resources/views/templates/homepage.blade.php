{{--
  resources/views/templates/homepage.blade.php
   --}}

<!DOCTYPE HTML>
<html>
@include('partials.header')

<!-- NAVBAR -->
@include('partials.nav')


<!-- PORTFOLIO -->

@section('content')
@show

<!-- footer -->
  @include('partials.footer')
<!-- /footer -->

  <!-- script -->
  @include('partials.script')
  <!-- /script -->


</body>


</html>
