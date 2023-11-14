<!DOCTYPE html>
<html lang="en">
 @include('admin.head')
         @include('admin.navbar')
      <!-- partial -->
      @include('admin.sidebar')
        <!-- partial -->
        <div class="container">

@if(session()->has('message'))
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">X</button>
        {{session()->get('message')}}
      </div>
      @endif

<h1>Add Company</h1>
<form action="{{'/postcompany'}}" method="POST" class="my-4" enctype="multipart/form-data">
@csrf
<div class="row">

    <div class="col-sm-5 mx-6 form-group">
      <label for="name">Company Name:</label>
      <input type="text" name="company_name" class="form-control" id="company_name" placeholder="...">
    </div>
    <div class="col-sm-5 mx-6 form-group">
      <label for="contry">Country Name :</label>
      <input type="text"  name="country" class="form-control" id="country" placeholder="...">
    </div>
    <div class="col-sm-5 mx-6 form-group">
      <label for="fee">Contract Amount :</label>
      <input type="text"  name="amount" class="form-control" id="amount" placeholder="...">
    </div>
    <div class="col-sm-5 mx-6 form-group">
      <label for="fee">Amount to be charged :</label>
      <input type="text"  name="charged_amount" class="form-control" id="charged_amount" placeholder="...">
    </div>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>

$(document).ready(function() {
 $('.summernote').summernote();

});
</script>
    <!-- partial -->
    @include('admin.script')

  </body>
</html>
