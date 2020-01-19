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
<script type="text/javascript">
$(document).ready(function() {

$(".jobavailablestatus").click(function() {
var id = $(this).attr('data-id');
	$.ajax({
		headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
},
		type: "POST",
		url: "{{ url('/jobavailableajax') }}",
		data: {'id': id},
		success: function(result) {
			$('#filejobavaliable').html(result);
		},
		error: function() {
			alert('err');
		}
	});
});
});
</script>
  </body>
</html>
