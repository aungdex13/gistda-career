<!doctype html>
<html lang="en">
@include('layout.headerscript')
@include('layout.header')
@include('apps.home')
@include('apps.jobavailable')
@include('apps.intership')
@include('apps.welfare')
@include('apps.contact')
@include('apps.allmodal')
@include('layout.footer')
  </div> <!-- .site-wrap -->
@include('layout.footerscript')
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );

</script>
  </body>
</html>
