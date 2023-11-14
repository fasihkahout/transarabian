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
      <h1 class="card-title">Money Transfer</h1>
      <div style="position: relative;left: 20%; bottom:2em">
        <a href="{{url('addtransfer')}}"><button id="add-category-btn" class="btn btn-success">Add Money Transfer</button></a>
      </div>
      <div style="overflow: auto;" class="col-md-12">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width: 20%;">Date</th>
              <th style="width: 20%;">Reference No.</th>
              <th style="width: 20%;">From Account</th>
              <th style="width: 40%;">To Account</th>
              <th style="width: 40%;">Amount</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                  <a class="btn btn-success" >Edit</a>
                  <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this company?')">Delete</a>
                </td>
            </tr>
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
