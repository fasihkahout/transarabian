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
      <h1 class="card-title">Users</h1>
      <div style="position: relative;left: 80%; bottom:2em">
        <a href="{{url('adduser')}}"><button id="add-category-btn" class="btn btn-success">Add User</button></a>
      </div>
      <div style="overflow: auto;" class="col-md-12">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Name</th>
              <th>E-mail</th>
              <th>Mobile No</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{ isset($user->email) ? $user->email : 'N/A' }}</td>
                <td>{{$user->phone_number}}</td>
                <td>
                  <a class="btn btn-success" href="{{'edituser/'.$user->id}}">Edit</a>
                  <a class="btn btn-danger" href="{{'deleteuser/'.$user->id}}" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
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
