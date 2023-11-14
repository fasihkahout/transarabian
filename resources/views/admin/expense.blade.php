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
      <h1 class="card-title">Expense</h1>
      <div style="position: relative;left: 80%; bottom:2em">
        <a href="{{url('addexpense')}}"><button id="add-category-btn" class="btn btn-success">Add Expense</button></a>
      </div>
      <div style="overflow: auto;" class="col-md-12">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Date</th>
              <th>Title</th>
              <th>Reference ID</th>
              <th>Expense Category Name</th>
              <th>Expense From</th>
              <th>Expense Price</th>
              <th>Description</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($expense as $expense)
            <tr>
                <td>{{$expense->date}}</td>
                <td>{{$expense->title}}</td>
                <td>{{$expense->ref_id}}</td>
                <td>{{ isset($expense->expenseCategory->name, $expense->expenseCategory->code) ? $expense->expenseCategory->name  . ' - ' . $expense->expenseCategory->code : 'N/A' }}</td>


                <td>{{isset($expense->accounts->name)?$expense->accounts->name:'N/A'}}</td>
                <td>{{$expense->expense_price}}</td>
                <td>{{$expense->description}}</td>
                <td>
                  <a class="btn btn-success" href="{{'editexpense/'.$expense->id}}">Edit</a>
                  <a class="btn btn-danger" href="{{'deleteexpense/'.$expense->id}}" onclick="return confirm('Are you sure you want to delete this expense?')">Delete</a>
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
