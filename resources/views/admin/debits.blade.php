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
      <h1 class="card-title">Debits List</h1>
      <div style="position: relative;left: 20%; bottom:2em">
        <a href="{{  route('debitcandidate', ['id' => $candidate->id]) }}"><button id="add-category-btn" class="btn btn-success">Add Debit</button></a>
      </div>
      <div style="overflow: auto;" class="col-md-12">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Debit Date </th>
              <th>Debit Amount</th>
              <th>Debit Description</th>
              <th>Bank Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($debits as $debit)
            <tr>
                <td>{{$debit->debit_date}}</td>
                <td>{{$debit->debit_amount}}</td>
                <td>{{$debit->debit_des}}</td>
                <td>{{isset($debit->accounts->name)?$debit->accounts->name:'N/A'}}</td>
                <td>
                    <a class="btn btn-success" href="{{'editdebit/'.$debit->id}}">Edit</a>
                    <a class="btn btn-danger" href="{{ route('deletedebit', ['id' => $debit->id]) }}" onclick="return confirm('Are you sure you want to delete this debit?')">Delete</a>
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
