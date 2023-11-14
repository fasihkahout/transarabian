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
      <h1 class="card-title">Credits List</h1>
      <div style="position: relative;left: 20%; bottom:2em">
        <a href="{{  route('creditcandidate', ['id' => $candidate->id]) }}"><button id="add-category-btn" class="btn btn-success">Add Credit</button></a>
      </div>
      <div style="overflow: auto;" class="col-md-12">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Credit Date </th>
              <th>Credit Amount</th>
              <th>Credit Description</th>
              <th>Bank Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($credits as $credit)
            <tr>
                <td>{{$credit->credit_date}}</td>
                <td>{{$credit->credit_amount}}</td>
                <td>{{$credit->credit_des}}</td>
                <td>{{isset($credit->accounts->name)?$credit->accounts->name:'N/A'}}</td>
                <td>
                    <a class="btn btn-success" href="{{'editcredit/'.$credit->id}}">Edit</a>
                    <a class="btn btn-danger" href="{{ route('deletecredit', ['id' => $credit->id]) }}" onclick="return confirm('Are you sure you want to delete this credit?')">Delete</a>
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
