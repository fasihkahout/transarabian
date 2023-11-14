@include('layouts.header')
<link href="assets/css/bootstrap.css">
<link href="assets/js/javascriptfile1.js">
<link href="assets/js/jquaryfile.js">

<style>
 

/* CSS */
.button-7 {
  background-color: #0095ff;
  border: 1px solid transparent;
  border-radius: 3px;
  box-shadow: rgba(255, 255, 255, .4) 0 1px 0 0 inset;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-family: -apple-system,system-ui,"Segoe UI","Liberation Sans",sans-serif;
  font-size: 18px;
  font-weight: 400;
  line-height: 1.15385;
  margin: 0;
  outline: none;
  padding: 10px 15px;
  position: relative;
  left: 10px;
  text-align: center;
  text-decoration: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: baseline;
  white-space: nowrap;
}

.button-7:hover,
.button-7:focus {
  background-color: #07c;
}

.button-7:focus {
  box-shadow: 0 0 0 4px rgba(0, 149, 255, .15);
}

.button-7:active {
  background-color: #0064bd;
  box-shadow: none;
}

</style>

<section style="position: relative; top: 25vh;">
  <div class="container-fluid">
    <div class="row">
      <!-- side bar -->
      <div class="col-lg-2 col-md-4 grid-margin stretch-card" style="margin-bottom: 5vh;position: sticky;">
        <div class="settings-menu-links" style="margin-top: 0vh;">
          <ul class="nav nav-tabs menu-tabs">
            <li class="nav-item">
              <a class="nav-link active" href="#"><i class="fa fa-user icon"></i> {{Auth::user()->name}}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa fa-book icon"></i> New Jobs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa fa-credit-card icon"></i> Notifications</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('editprofiles') }}"><i class="fa fa-credit-card icon"></i> Profile</a>
            </li>
            <li class="nav-item">

              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="button-7" type="submit">Logout</button>

              </form>
            </li>

          </ul>
        </div>
      </div>
      <!-- courses content -->
      <div class="col-lg-10 col-md-8 grid-margin stretch-card">
        <div class="container-fluid page-body-wrapper">
          <!-- partial:partials/_sidebar.html -->
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <p class="card-description">
                <h1 style="color:black">Edit Profile</h1>
                </p>
<div class="container">
    @if(session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">X</button>
        {{ session()->get('message') }}
    </div>
    @endif

   
    <form action="{{ route('updateProfiles', ['id' => $profile->id]) }}" method="POST" class="my-4" enctype="multipart/form-data">
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
              </div>
            </div>
          </div>
        </div>
      </div>
</section>