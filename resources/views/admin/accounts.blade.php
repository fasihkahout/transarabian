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
      <h1 class="card-title">Accounts</h1>
      <div style="position: relative;left: 20%; bottom:2em">
        <a href="{{url('addaccount')}}"><button id="add-category-btn" class="btn btn-success">Add Accounts</button></a>
      </div>
      <div style="overflow: auto;" class="col-md-12">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width: 20%;">Account Number</th>
              <th style="width: 20%;">Name</th>
              <th style="width: 20%;">Initial Balance</th>
              <th style="width: 40%;">Note</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($accounts as $account)
            <tr>
                <td>{{$account->account}}</td>
                <td>{{$account->name}}</td>
                <td>{{$account->balance}}</td>
                <td>{{$account->note}}</td>
                <td>
                   <a class="btn btn-success" href="{{'editaccount/'.$account->id}}">Edit</a>
                    <a href="{{ route('deleteaccount', ['id' => $account->id]) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this company?')">Delete</a>
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
