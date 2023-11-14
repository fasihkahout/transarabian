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
      <h1 class="card-title">Person Ledger</h1>
      <div style="position: relative;left: 80%; bottom:2em">
        <a href="{{url('addpersonledger')}}"><button id="add-category-btn" class="btn btn-success">Add Person Ledger</button></a>
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
              <th>Description</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($personLedger as $personLedger)
            <tr>
                <td>{{$personLedger->date}}</td>
                <td>{{$personLedger->title}}</td>
                <td>{{$personLedger->ref_id}}</td>
                <td>{{isset($personLedger->accounts->name)?$personLedger->accounts->name:'N/A'}}</td>
               <td>{{$personLedger->credit_amount ?? 0}}</td>
<td>{{$personLedger->debit_amount ?? 0}}</td>

                <td>{{$personLedger->description}}</td>
                <td>
                  <a class="btn btn-success" href="{{'editpersonledger/'.$personLedger->id}}">Edit</a>
                  <a class="btn btn-info" href="{{'personledger/'.$personLedger->id}}">Ledger</a>
                  <a class="btn btn-danger" href="{{'deletepersonledger/'.$personLedger->id}}" onclick="return confirm('Are you sure you want to delete this Ledger?')">Delete</a>
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
