<!DOCTYPE html>
<html lang="en">
 @include('admin.head')
         @include('admin.navbar')
      <!-- partial -->
      @include('admin.sidebar')
        <!-- partial -->
       <style>
        .thead-table
        {
          zoom: 0.7;
        }
        .tbody-table
        {
          zoom: 0.7;
        }

       </style>
        <div class="col-lg-8 grid-margin ">
  <div class="">
    <div class="">
        <a href="{{ route('applicants')}}"><button class="add-button btns btn btn-info"  style="float:right; position:relative; left:17%;" >Add Applicants</button></a>
      <h1 class="">Application  List</h1>
     
      <div  class="col-md-8">

        <table class="table table-bordered">
          <thead class="thead-table">
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Available for this Job</th>
              <th>Applied Job</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody class="tbody-table">
          @foreach ($jobs as $info)
          <tr>
          <td>{{ $info->user_id }}</td>
          <td>{{ $info->firstname }} {{ $info->lastname }}</td>
          <td>{{ $info->email }}</td>
          <td>{{ $info->avialible }}</td>
          <td>{{ $info->title }}</td>
          <td>
          <form style="display: inline;" action="{{ url('updatestatus', ['table_id' => $info->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <select name="status" onchange="this.form.submit()">
              <option value="Applied" {{ $info->status == 'Applied' ? 'selected' : '' }}>Applied</option>
              <option value="in progress" {{ $info->status == 'in progress' ? 'selected' : '' }}>In Progress</option>
              <option value="selected" {{ $info->status == 'selected' ? 'selected' : '' }}>Selected</option>
              <option value="rejected" {{ $info->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
            </select>

            @if ($info->file)
              <p>Existing File: <a href="{{ asset('jobimage/'.$info->file) }}" target="_blank">{{ $info->file }}</a></p>
            @endif

            <input type="file" name="file" multiple>

            <button type="submit">Submit</button>
          </form>
          </td>
          <td>
          <a class=" btns btn btn-info" href="{{ url('userdetail', ['id' => $info->id]) }}">See Detail</a>

          <a class=" btns btn btn-danger" onclick="return confirm('Are you sure you want to delete this Category?');" href="{{ url('deleteapplication', $info->id) }}">Delete</a>

          <a class="btn btn-info" href="{{url('candidate')}}">Ledger</a>

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
