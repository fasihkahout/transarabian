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

<h1>Add User</h1>
<form action="{{ route('postuser') }}" method="POST" class="my-4" enctype="multipart/form-data">
@csrf
<div class="row">

<div class="col-sm-5 mx-6 form-group">
      <label for="fee">Name :</label>
      <input type="text"  name="name" class="form-control" id="name" placeholder="...">
    </div>
    <div class="col-sm-5 mx-6 form-group">
      <label for="fee">E-Mail :</label>
      <input type="text"  name="email" class="form-control" id="email" placeholder="...">
    </div>
    
    <div class="col-sm-5 mx-6 form-group">
      <label for="fee">Mobile No :</label>
      <input type="text"  name="phone_number" class="form-control" id="phone_number" placeholder="...">
    </div>
    
    <div class="col-sm-5 mx-6 form-group">
      <label for="fee">Password :</label>
      <input type="text"  name="password" class="form-control" id="password" placeholder="...">
    </div>
    
    
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
    <!-- partial -->
    @include('admin.script')

  </body>
</html>
