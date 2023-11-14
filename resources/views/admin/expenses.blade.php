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
      <h1 class="card-title">Expenses List</h1>
      <div style="position: relative;left: 20%; bottom:2em">
        <a href="{{url('addexpenses')}}"><button id="add-category-btn" class="btn btn-success">Add Expenses</button></a>
      </div>
      <div style="overflow: auto;" class="col-md-12">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Comapny Name</th>
              <th>Expense name</th>
              <th>Expense price</th>
              <th>Expense ID</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($expenses as $expense)
            <tr>
                <td>{{$expense->company_n}}</td>
                <td>{{$expense->expense}}</td>
                <td>{{$expense->expense_price}}</td>
                <td>{{$expense->expense_id}}</td>
                <td>
                  <a class="btn btn-success" href="{{ 'editexpenses/' . $expense->id }}">Edit</a>
                  <a href="{{ route('deleteexpenses', ['id' => $expense->id]) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this company?')">Delete</a>
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
