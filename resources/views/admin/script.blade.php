<!-- partial -->
</div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{URL::to('/')}}/admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{URL::to('/')}}/admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="{{URL::to('/')}}/admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{URL::to('/')}}/admin/assets/js/off-canvas.js"></script>
    <script src="{{URL::to('/')}}/admin/assets/js/hoverable-collapse.js"></script>
    <script src="{{URL::to('/')}}/admin/assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{URL::to('/')}}/admin/assets/js/dashboard.js"></script>
    <script src="{{URL::to('/')}}/admin/assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<!--  -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#summernote').summernote({
				placeholder: 'Type your content here...',
				height: 300,
				toolbar: [
					['style', ['bold', 'italic', 'underline', 'clear']],
					['font', ['strikethrough', 'superscript', 'subscript']],
					['color', ['forecolor', 'backcolor']],
					['para', ['ul', 'ol', 'paragraph']],
					['height', ['height']],
					['misc', ['fullscreen']]
				]
			});
		});
	</script>
  </body>
</html>