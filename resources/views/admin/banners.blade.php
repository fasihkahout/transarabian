<!DOCTYPE html>
<html lang="en">
  @include('admin.head')
      <!-- partial:partials/_navbar.html -->
      <body>
         @include('admin.navbar')
      <!-- partial -->
      @include('admin.sidebar')
        <!-- partial -->

        <div class="container-fluid page-body-wrapper"  >

              <div class="col-lg-10 grid-margin stretch-card">

                <div class="card">
                  <div class="card-body">
                    
                    <p class="card-description"><h1 style="color:black">Banners List</h1>
                    </p>
                    <div style="position: relative;left: 70%; bottom:2em">
        <a class="btn btn-success"  href="{{url('addbanners')}}">Upload Banner</a>
    </div>

                    <div class="table-responsive">
                      <table class="table table-bordered" >
                        <thead>
                        <tr>
            <th>Sr.No</th>
            <th>Title</th>
            <th>Subtitle</th>
            <th>Button-left</th>
            <th>Button-right</th>
            <th>Video</th>
            <th>Action</th>

                        </tr>
                         
                        </thead>
                        <tbody>
                        @foreach (App\Models\banner::getbanner() as $banner )
                <tr>
            <td>{{$banner->id}}</td>
            <td>{{$banner->title}}</td>
            <td>{{$banner->subtitle}}</td>
            <td>{{$banner->buttonleft}}</td>
            <td>{{$banner->buttonright}}</td>
            <td>{{$banner->video}}</td>
            <td><a class="btn btn-danger" href="{{url('deletebanner',$banner->id)}}" >Delete</a>
            <a class="btn btn-success" href="{{url('updatebanners',$banner->id)}}">Update</a></td>
        </tr>
        @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

          <!-- partial -->
        
       @include('admin.script')