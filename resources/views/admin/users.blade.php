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
      <h1 class="card-title">Users List</h1>
      <div style="position: relative;left: 20%; bottom:2em">
      </div>
      <div style="overflow: auto;" class="col-md-12">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Mobile Number</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($userdetail as $user)
            <tr>
                <td>{{$user->firstname}}</td>
                <td>{{$user->lastname}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->mobileno}}</td>
                <td>
          <a class=" btns btn btn-info" href="{{ url('userdescription', ['id' => $user->id]) }}">See Detail</a>
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
