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
      <h1 class="card-title">Transfer Money</h1>
      <div style="position: relative;left: 80%; bottom:2em">
        <a href="{{url('addtransferMoney')}}"><button id="add-category-btn" class="btn btn-success">Add Transfer Money</button></a>
      </div>
      <div style="overflow: auto;" class="col-md-12">
        <table class="table table-bordered">
          <thead>
            <tr>
               <th>Date</th>
              <th>Title</th>
              <th>Reference ID</th> 
              <th>Bank</th>
               <th>Credit Amount</th>
                <th>Debit Amount</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($transferMoney as $transferMoney)
            <tr>#
            <td>{{$transferMoney->date}}</td>
                <td>{{$transferMoney->title}}</td>
                <td>{{$transferMoney->ref_id}}</td>
                 <td>{{isset($transferMoney->accounts->name)?$transferMoney->accounts->name:'N/A'}}</td>
                <td>{{$transferMoney->credit ?? 0}}</td>
<td>{{$transferMoney->debit ?? 0}}</td>
                <td>
                  <a class="btn btn-success" href="{{'edittransferMoney/'.$transferMoney->id}}">Edit</a>
                  <a class="btn btn-info" href="{{'transfermoney/'.$transferMoney->id}}">Ledger</a>
                  <a class="btn btn-danger" href="{{'deletetransferMoney/'.$transferMoney->id}}" onclick="return confirm('Are you sure you want to delete this transfer?')">Delete</a>
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
