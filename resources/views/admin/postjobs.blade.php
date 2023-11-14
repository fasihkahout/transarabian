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

<h1>Add Job</h1>
<form action="{{url('addjob1')}}" method="POST" class="my-4" enctype="multipart/form-data">
@csrf
<div class="row">
  
    <div class="col-sm-5 mx-6 form-group">
      <label for="name">Title:</label>
      <input type="text" name="title" class="form-control" id="name" placeholder="Enter your Title">
    </div>
    <div class="col-sm-5 mx-6 form-group">
      <label for="contact">Location:</label>
      <input type="text"  name="requirment" class="form-control" id="slug" placeholder="Add Requirments">
    </div>
    <div class="col-sm-5 mx-12 form-group">
        <label for="cnic"> Industry:</label>
        <select class="form-control" name="category" >
          <option>Select Industry</option>
          @foreach ($course as $info)
            <option value="{{$info->category}}">{{$info->category}}</option>
            @endforeach
        </select>
    </div>
    
    <div class="col-sm-5 mx-12 form-group">
        <label for="cnic"> Upload Image:</label>
        <input type="file"  name="image" class="form-control" >       
    </div>
    
    <div class="col-sm-5 mx-6 form-group">
      <label for="salary">Salary:</label>
      <input type="text" name="salary" class="form-control" id="salary" placeholder="Enter your Salary">
    </div>
    <div class="col-sm-5 mx-6 form-group">
      <label for="vacancies">Vacancies:</label>
      <input type="text" name="vacancies" class="form-control" id="vacancies" placeholder="Enter your Vacancies">
    </div>

    <div class="col-sm-12 mx-12 form-group">
      <label for="textarea"> Job Description:</label>
      <textarea type="text"  name="description" class="form-control summernote" id="summernote" placeholder="Enter your Detail"> </textarea>
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