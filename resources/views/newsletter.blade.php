<!-- newsletter.blade.php -->

@if (\Session::has('success'))
<script> toastr.success("{{ Session::get('success') }}");</script>
@endif
@if (\Session::has('failure'))
<script> toastr.error("{{ Session::get('failure') }}");</script>
@endif
