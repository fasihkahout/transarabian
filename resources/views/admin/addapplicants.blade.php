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

<h1>Add Applicants</h1>
<form method="POST" class="my-4" enctype="multipart/form-data">
@csrf
<div class="row">

    <div class="col-sm-5 mx-6 form-group">
      <label for="applicant_name">Applicants Name:</label>
      <input type="text" name="applicant_name" class="form-control" id="applicant_name" placeholder="...">
    </div>
    <div class="col-sm-5 mx-6 form-group">
      <label for="applicant_email">Email :</label>
      <input type="text"  name="applicant_email" class="form-control" id="applicant_email" placeholder="...">
    </div>
    <div class="col-sm-5 mx-6 form-group">
      <label for="applicant_job">Applied Job :</label>
      <input type="text"  name="applicant_job" class="form-control" id="applicant_job" placeholder="...">
    </div>
    <div class="col-sm-5 mx-6 form-group">
      <label for="applicant_cell">Mobile Number :</label>
      <input type="text"  name="applicant_cell" class="form-control" id="applicant_cell" placeholder="...">
    </div>
    <div class="col-sm-5 mx-6 form-group">
      <label for="applicant_pass">Passport Number :</label>
      <input type="text"  name="applicant_pass" class="form-control" id="applicant_pass" placeholder="...">
    </div>
    <div class="col-sm-5 mx-6 form-group">
      <label for="applicant_trade">Trade Name :</label>
      <input type="text"  name="applicant_trade" class="form-control" id="applicant_trade" placeholder="...">
    </div>
    <div class="col-sm-5 mx-6 form-group">
      <label for="applicant_com">Company Applied For :</label>
      <input type="text"  name="applicant_com" class="form-control" id="applicant_com" placeholder="...">
    </div>
    
    <div class="col-sm-5 mx-6 form-group">
      <label for="applicant_com_w">Company Worked In :</label>
      <input type="text"  name="applicant_com_w" class="form-control" id="applicant_com_w" placeholder="...">
    </div>
    <div class="col-sm-5 mx-6 form-group">
      <label for="applicant_b">Badge No :</label>
      <input type="text"  name="applicant_b" class="form-control" id="applicant_b" placeholder="...">
    </div>
    <div class="col-sm-5 mx-6 form-group">
      <label for="applicant_status">Status :</label>
      <input type="text"  name="applicant_status" class="form-control" id="applicant_status" placeholder="...">
    </div>
    <div class="col-sm-5 mx-6 form-group">
      <label for="applicant_res">Upload Resume :</label>
      <input type="file"  name="applicant_res" class="form-control" id="applicant_res" placeholder="...">
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
