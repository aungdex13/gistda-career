<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript">
$(document).ready(function() {

	$(".aung").click(function() {
	var id = $(this).attr('data-id');
		$.ajax({
      headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
},
			type: "POST",
			url: "{{ url('test/testajax') }}",
			data: {'id': id},
			success: function(result) {
				$('#aung1').html(result);
			},
			error: function() {
				alert('err');
			}
		});
	});
});
</script>
</head>
<body>

<div class="container">
  <h2>Modal Example</h2>
  <!-- Button to Open the Modal -->
  <?php
	for ($i=0; $i<=5; $i++) {
		echo "<button type=\"button\" data-id=\"m".$i."\" class=\"btn btn-primary aung\" data-toggle=\"modal\" data-target=\"#myModal\">";
		echo "O".$i;
		echo "</button>";
		echo "<hr>";
	}
  ?>

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body" id="aung1">

        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

</div>

</body>
</html>
