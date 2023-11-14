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
      <h1 class="card-title">Expense Category  List</h1>
      <div style="position: relative;left: 80%; bottom:2em">
        <a href="{{url('addexpensecategory')}}"><button id="add-category-btn" class="btn btn-success">Add Expense Category</button></a>
      </div>
      <div style="overflow: auto;" class="col-md-12">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Category Name</th>
              <th>Category Code</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($expenseCategories as $expenseCategory)
            <tr>
                <td>{{$expenseCategory->name}}</td>
                <td>{{$expenseCategory->code}}</td>
                <td>
                    <a class="btn btn-success" href="{{'editexpensecategory/'.$expenseCategory->id}}">Edit</a>
                    <a href="{{ route('deleteexpensecategory', ['id' => $expenseCategory->id]) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Catgeory?')">Delete</a>
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
