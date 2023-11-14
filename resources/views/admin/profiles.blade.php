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
        {{ session()->get('message') }}
    </div>
    @endif

    <h1>Edit Profile</h1>
    <form action="{{ route('updateProfile', ['id' => $profile->id]) }}" method="POST" class="my-4" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-sm-5 mx-6 form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="..." value="{{ $profile->name }}">
            </div>
            <div class="col-sm-5 mx-6 form-group">
                <label for="country">E-mail:</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="..." value="{{ $profile->email }}" >
            </div>
             <div class="col-sm-5 mx-6 form-group">
                <label for="country">Phone Number:</label>
                <input type="text" name="phone_number" class="form-control" id="phone_number" placeholder="..." value="{{ $profile->phone_number }}" >
            </div>
             <div class="col-sm-5 mx-6 form-group">
                <label for="country">Password:</label>
                <input type="text" name="password" class="form-control" id="password" placeholder="..." >
            </div>
             </div>
         <button type="submit" class="btn btn-primary">Update</button>
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
