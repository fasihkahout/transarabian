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
                <h1 style="color:black"> My Job List</h1>
                </p>
                <div class="table-responsive-sm">
                  <table class="table table-bordered">
                    <thead style="color: white;">
                      <tr>
                        <th>Sr.No</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th>Available for this job</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($jobs as $info)
                      <tr>
                        <td>{{$info->id}}</td>
                        <td>{{$info->title}}</td>
                        <td>{{$info->category}}</td>
                        <td> Your job status: <span style="font-weight: bolder;font-size: 16px;"> {{$info->status}}</span><br>
                        @if ($info->file)
    <p>Click to download file: <a href="{{ asset('jobimage/'.$info->file) }}" target="_blank" download>{{ $info->file }}</a></p>
@endif

                      </td>
                      <td>
                      <form style="display: inline;" action="{{ url('updatestatusjob',['id' => $info->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <select name="avialible" onchange="this.form.submit()">
          <option value="Yes" {{ $info->avialible == 'Yes' ? 'selected' : '' }}>Yes</option>
          <option value="No" {{ $info->avialible == 'No' ? 'selected' : '' }}>No</option>
        </select>
       
      </form>
                    </td>
                        <td>
                          <a class="btn btn-danger" href="{{url('deletejobuser',$info->id)}}" onclick="return confirm('Are you sure you want to delete this job?');">Cancel</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>