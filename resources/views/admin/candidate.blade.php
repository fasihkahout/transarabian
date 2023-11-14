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
      <h1 class="card-title">Candidates Ledger</h1>
      <div style="position: relative;left: 20%; bottom:2em">
        <a href="{{url('addcandidate')}}"><button id="add-category-btn" class="btn btn-success">Add Candidate</button></a>
      </div>
      <div style="overflow: auto;" class="col-md-12">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Candidate Name</th>
              <th>Company Name</th>
              <th>Amount to be charged</th>
              <th>Received</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($candidates as $candidate)
            <tr>
                <td>{{ isset($candidate->jobs->firstname, $candidate->jobs->lastname, $candidate->jobs->passportno) ? $candidate->jobs->firstname . ' ' . $candidate->jobs->lastname . ' - ' . $candidate->jobs->passportno : 'N/A' }}</td>


                <td>{{isset($candidate->companies->company_name)?$candidate->companies->company_name:'N/A'}}</td>
                <td>{{$candidate->amount_ch}}</td>
                <td>{{$candidate->received}}</td>
                <td>
                  <a class="btn btn-success" href="{{'editcandidate/'.$candidate->id}}">Edit</a>
                  <a class="btn btn-secondary" href="{{'credits/'.$candidate->id}}">Credit</a>
                  <a class="btn btn-success" href="{{'debits/'.$candidate->id}}">Debit</a>
                  <a class="btn btn-info" href="{{'ledger/'.$candidate->id}}">Ledger</a>
                  <a class="btn btn-danger" href="{{'deletecandidate/'.$candidate->id}}" onclick="return confirm('Are you sure you want to delete this company?')">Delete</a>
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
