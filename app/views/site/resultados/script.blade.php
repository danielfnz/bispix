    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    {{ HTML::script('assets/bs/js/bootstrap.min.js') }}
    {{ HTML::script('assets/js/offcanvas.js') }}
    <script>
    	$(document).on("click", ".openModal", function () {
			var title = $(this).data('title');
			var route = $(this).data('route');
			$(".modal-title").html( title );
			$('#documentText').load( route );
		});
    </script>