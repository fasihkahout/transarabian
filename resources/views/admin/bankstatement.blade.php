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
      
      <div  style="overflow-x:auto;" class="col-md-12">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width: 35%;">Account Number</th>
              <th style="width: 35%;">Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($accounts as $account)
            <tr>
                <td>{{$account->account}}</td>
                <td>{{$account->name}}</td>
                <td>
                  <a class="btn btn-info" href="{{'statement/'.$account->id}}">Bank Statement</a>
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
