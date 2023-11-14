<!DOCTYPE html>
<html lang="en">
 @include('admin.head')
         @include('admin.navbar')
      <!-- partial -->
      @include('admin.sidebar')
        <!-- partial -->

        <div class="col-lg-10 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h1 class="card-title">Jobs List</h1>
      <div style="position: relative;left: 20%; bottom:2em">
        <a href="{{url('postjobs')}}"><button id="add-category-btn" class="btn btn-success">Post Job</button></a>
      </div>
      <div style="overflow: auto;" class="col-md-12">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Category</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($category as $info)
            <tr>
              <td>{{$info->id}}</td>
              <td>{{$info->title}}</td>

              <td>{{$info->category}}</td>



              <td><img src="{{'jobimage/'.$info->image}}" alt=""></td>

          <td>
            <a class="btn btn-success" href="{{'editjob/'.$info->id}}">Edit</a>
            <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Category?');"href="{{'deletejob/'.$info->id}}">Delete</a>
          </td>


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

  </body>
</html>
