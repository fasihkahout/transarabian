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

    <h1>Edit User</h1>
    <form action="{{ route('updateuser', $user->id) }}" method="POST">
        @csrf
        
        <div class="row">

<div class="col-sm-5 mx-6 form-group">
                <label for="fee">Name :</label>
                <input type="text"  name="name" class="form-control" value="{{ $user->name }}" id="name" placeholder="...">
              </div>
               <div class="col-sm-5 mx-6 form-group">
                <label for="fee">E-Mail :</label>
                <input type="text"  name="email" class="form-control" value="{{ $user->email }}" id="email" placeholder="...">
              </div>
              
              <div class="col-sm-5 mx-6 form-group">
                  <label for="fee">Mobile No:</label>
                  <input type="text"  name="phone_number" class="form-control" value="{{ $user->phone_number }}" id="phone_number" placeholder="...">
            </div>
              
               <div class="col-sm-5 mx-6 form-group">
      <label for="fee">Password :</label>
      <input type="text"  name="password" class="form-control"  id="password" placeholder="...">
    </div>
              
              
            
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

<!-- partial -->
@include('admin.script')
</body>
</html>
