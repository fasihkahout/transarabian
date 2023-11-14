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
      <h1 class="card-title">Companies List</h1>
      <div style="position: relative;left: 20%; bottom:2em">
        <a href="{{url('addcompany')}}"><button id="add-category-btn" class="btn btn-success">Add Company</button></a>
      </div>
      <div style="overflow: auto;" class="col-md-12">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Comapny Name</th>
              <th>Country Name</th>
              <th>Contract Amount</th>
              <th>Amount to be charged</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($companies as $company)
            <tr>
                <td>{{$company->company_name}}</td>
                <td>{{$company->country}}</td>
                <td>{{$company->amount}}</td>
                <td>{{$company->charged_amount}}</td>
                <td>
                    <a class="btn btn-success" href="{{'viewcompany/'.$company->id}}">View</a>
                    <a class="btn btn-success" href="{{'editcompany/'.$company->id}}">Edit</a>
                    <a href="{{ route('deletecompany', ['id' => $company->id]) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this company?')">Delete</a>
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
