<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.countdown.min.js"></script>
<script src="assets/js/jquery.easing.1.3.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/jquery.fancybox.min.js"></script>
<script src="assets/js/jquery.sticky.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/main.js"></script>
<!-- datatable -->
<script src="assets/js/datatable/jquery.dataTables.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
$(document).ready(function() {

  $.ajaxSetup({
      header:{
        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
      }
    });


    $(#viewjob).click(function() {
      alert('o');
          $.ajax({
              type: "GET",
              url: "{{ route('test') }}",
              data: ({ x : 1 }),
              dataType: "html",
              success: function(data) {
                $('#job-available-Modal').html(data);
              },
              error: function() {
                  alert('Error occured');
              }
          });

        });
        */
      });

</script>
